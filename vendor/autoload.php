<?php

class SplClassLoader
{
    private $_fileExtension = '.class.php';
    private $_namespace;
    private $_includePath;
    private $_namespaceSeparator = '\\';
    public $debug = false;


    public function __construct($ns = null, $includePath = null)
    {
        $this->_namespace = $ns;
        $this->_includePath = $includePath;
    }


    public function setNamespaceSeparator($sep)
    {
        $this->_namespaceSeparator = $sep;
    }


    public function getNamespaceSeparator()
    {
        return $this->_namespaceSeparator;
    }


    public function setIncludePath($includePath)
    {
        $this->_includePath = $includePath;
    }


    public function getIncludePath()
    {
        return $this->_includePath;
    }


    public function setFileExtension($fileExtension)
    {
        $this->_fileExtension = $fileExtension;
    }


    public function getFileExtension()
    {
        return $this->_fileExtension;
    }


    public function register()
    {
        spl_autoload_register(array($this, 'loadClass'));
    }


    public function unregister()
    {
        spl_autoload_unregister(array($this, 'loadClass'));
    }


    public function loadClass($className)
    {
        if ($this->debug) {
            var_dump("loadClass ($this->_namespace) $className");
        }

        if ($className[0] === "\\") {
            $className = substr ($className, 1);
        }

        if (null === $this->_namespace || $this->_namespace.$this->_namespaceSeparator === substr($className, 0, strlen($this->_namespace.$this->_namespaceSeparator))) {
            $fileName = '';
            $namespace = '';

            if (false !== ($lastNsPos = strripos($className, $this->_namespaceSeparator))) {
                $namespace = substr($className, 0, $lastNsPos);
                $className = substr($className, $lastNsPos + 1);
                $fileName = str_replace($this->_namespaceSeparator, DIRECTORY_SEPARATOR, $namespace) . DIRECTORY_SEPARATOR;
            }
            $fileName .= str_replace('_', DIRECTORY_SEPARATOR, $className) . $this->_fileExtension;
            $filePathName = ($this->_includePath !== null ? $this->_includePath . DIRECTORY_SEPARATOR : '') . $fileName;

            if ($this->debug) {
                var_dump("loading ($this->_namespace) $filePathName ...");
            }

            if (file_exists($filePathName)) {
                include $filePathName;
                $loaded = true;
            } else {
                $loaded = false;
            }

            if ($this->debug) {
                var_dump("loading ($this->_namespace) $filePathName " . ($loaded ? "OK" : "ERR"));
            }

            return $loaded;
        }

        return false;
    }
}
