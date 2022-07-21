<?php
namespace Composer\Util;
if (!defined('ABSPATH')) exit;
class Zip
{
 public static function getComposerJson($pathToZip)
 {
 if (!extension_loaded('zip')) {
 throw new \RuntimeException('The Zip Util requires PHP\'s zip extension');
 }
 $zip = new \ZipArchive();
 if ($zip->open($pathToZip) !== true) {
 return null;
 }
 if (0 == $zip->numFiles) {
 $zip->close();
 return null;
 }
 $foundFileIndex = self::locateFile($zip, 'composer.json');
 $content = null;
 $configurationFileName = $zip->getNameIndex($foundFileIndex);
 $stream = $zip->getStream($configurationFileName);
 if (false !== $stream) {
 $content = stream_get_contents($stream);
 }
 $zip->close();
 return $content;
 }
 private static function locateFile(\ZipArchive $zip, $filename)
 {
 // return root composer.json if it is there and is a file
 if (false !== ($index = $zip->locateName($filename)) && $zip->getFromIndex($index) !== false) {
 return $index;
 }
 $topLevelPaths = array();
 for ($i = 0; $i < $zip->numFiles; $i++) {
 $name = $zip->getNameIndex($i);
 $dirname = dirname($name);
 // ignore OSX specific resource fork folder
 if (strpos($name, '__MACOSX') !== false) {
 continue;
 }
 // handle archives with proper TOC
 if ($dirname === '.') {
 $topLevelPaths[$name] = true;
 if (\count($topLevelPaths) > 1) {
 throw new \RuntimeException('Archive has more than one top level directories, and no composer.json was found on the top level, so it\'s an invalid archive. Top level paths found were: '.implode(',', array_keys($topLevelPaths)));
 }
 continue;
 }
 // handle archives which do not have a TOC record for the directory itself
 if (false === strpos($dirname, '\\') && false === strpos($dirname, '/')) {
 $topLevelPaths[$dirname.'/'] = true;
 if (\count($topLevelPaths) > 1) {
 throw new \RuntimeException('Archive has more than one top level directories, and no composer.json was found on the top level, so it\'s an invalid archive. Top level paths found were: '.implode(',', array_keys($topLevelPaths)));
 }
 }
 }
 if ($topLevelPaths && false !== ($index = $zip->locateName(key($topLevelPaths).$filename)) && $zip->getFromIndex($index) !== false) {
 return $index;
 }
 throw new \RuntimeException('No composer.json found either at the top level or within the topmost directory');
 }
}
