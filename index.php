<?php
include_once("vendor/autoload.php");
$climate = new League\CLImate\CLImate;
$climate->description("subly - subtitle converter\nVersion: 1.0\nAuthor: Burak BOZ\nContact: burakboz@icloud.com\nGithub: https://github.com/BurakBoz");
$climate->arguments->add([
    'input' => [
        'prefix'       => 'i',
        'longPrefix'   => 'input',
        'description'  => 'input file: input.xml',
        'required'     => true,
        'castTo'      => 'string',
    ],
    'inputformat' => [
        'prefix'       => 'if',
        'longPrefix'   => 'inputformat',
        'description'  => 'input file format: webvtt, ttml, subrip, sbv, json, substationalpha',
        'required'     => false,
        'defaultValue' => 'ttml',
        'castTo'       => 'string',
    ],
    'output' => [
        'prefix'       => 'o',
        'longPrefix'   => 'output',
        'description'  => 'output file: output.srt',
        'required'     => true,
        'castTo'       => 'string',
    ],
    'outputformat' => [
        'prefix'       => 'of',
        'longPrefix'   => 'outputformat',
        'description'  => 'output file format: webvtt, ttml, subrip, sbv, json, substationalpha',
        'required'     => false,
        'defaultValue' => 'subrip',
        'castTo'       => 'string',
    ],
    'help' => [
        'prefix'      => 'h',
        'longPrefix'  => 'help',
        'description' => 'Prints a usage statement',
        'noValue'     => true,
    ],
]);
try { $climate->arguments->parse(); } catch (Exception $e) { $climate->usage(); }
if($climate->arguments->defined('help')) $climate->usage();
error_reporting(0);
if($climate->arguments->defined("input"))
{
    try
    {
        $formatNameSpace = 'Captioning\\Format\\'.str_replace(["webvtt","ttml","subrip","sbv","json","substationalpha"],["WebvttFile","TtmlFile","SubripFile","SBVFile","JsonFile","SubstationalphaFile"],strtolower($climate->arguments->get('inputformat')));
        if(!file_exists($climate->arguments->get('input'))) throw new Exception("Unable to read input file");
        $srt = new $formatNameSpace($climate->arguments->get('input'));
        $srt->convertTo(strtolower($climate->arguments->get('outputformat')))->save($climate->arguments->get('output'));
        $climate->green("Conversion completed.");
    }
    catch(Exception $e)
    {
        $climate->error("Error: ".$e->getMessage());
    }
}