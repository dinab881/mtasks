<?php
/**
 * Created by PhpStorm.
 * User: dina
 * Date: 27.11.18
 * Time: 10:32
 */
namespace App\Logs;
/**
 * Class Log
 * @package App\Logs
 */
class Log
{
    /**
     * @var string $rootPathDir
     */
    private static $rootPathDir;
    private $pathLog;
    const NEW_LOG_MESSAGE = '---NEW LOG---';

    public function __construct(string $path_value)
    {
        if (empty(self::$rootPathDir)) {
            throw new \Exception('Must set root log dir');
        }

        $path = $this->getValidPath($path_value);
        $this->pathLog = self::$rootPathDir . '/' . $path;

        if (!file_exists($this->pathLog)) {
            $arrayPath = explode('/', $path);
            $currentPathString = self::$rootPathDir . '/';

            foreach ($arrayPath as $key => $value) {
                $currentPathString .= $value . '/';
                if (file_exists($currentPathString)) {
                    continue;
                }
                if ($key == count($arrayPath) - 1) {
                    continue;
                }
                mkdir($currentPathString);
            }
        }
    }

    /**
     * Return object of Log class with passed namespace of class
     * @param string $path_class
     * @return Log
     */
    public static function setPathByClass(string $path_class): Log
    {
        return new Log($path_class . '.log');
    }

    public static function setPathByMethod(string $path_method): Log
    {
        $path_method = str_replace('::', '/', $path_method); // App\Main\Person/setName
        return new Log($path_method . '.log');
    }

    public function log(string $text)
    {
        $file = fopen($this->pathLog, 'a+');
        $message = PHP_EOL . PHP_EOL . self::NEW_LOG_MESSAGE . PHP_EOL . date('Y.m.d h:m:s') . PHP_EOL . $text;
        fwrite($file, $message);
        fclose($file);
    }

    public static function setRootLogDir(string $root_path)
    {
        self::$rootPathDir = $root_path;
    }

    public function getValidPath(string $path_value)
    {
        $path = trim(str_replace('\\', '/', $path_value), '/');
        return $path;
    }


}