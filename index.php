<?php

function LoadClasses(string $ClassName)
{
    $NamespacePrefix = 'Movable\\';
    $BaseDir = __DIR__ . '/src/';

    $PrefixLength = strlen($NamespacePrefix);
    if(strncmp($NamespacePrefix, $ClassName, $PrefixLength) !== 0)
    {
        // Our class does not contain our prefix, so why are we still here? Just to suffer?
        // Moving on
        return;
    }

    $RelativeClassName = substr($ClassName, $PrefixLength);

    $File = $BaseDir . str_replace('\\', '/', $RelativeClassName) . '.php';

    if(file_exists($File))
    {
        require ($File);
    }
}

spl_autoload_register('LoadClasses');
$Entity = new \Movable\Entity();
$Entity->PrintPosition();
$Entity->SetPosition(2.321, 3214.214, -3291.324322);
$Entity->PrintPosition();

$ChaoticEntity = new \Movable\ChaoticEntity();
$ChaoticEntity->PrintPosition();
$ChaoticEntity->SetPosition(2.321, 3214.214, -3291.324322);
$ChaoticEntity->PrintPosition();
?>
