<?php
// Inclua as classes definidas anteriormente
require_once 'Memento.php';
require_once 'Editor.php';
require_once 'Caretaker.php';

// Cria o editor e o caretaker
$editor = new Editor();
$caretaker = new Caretaker();

// Escreva algo no editor e salve o estado
$editor->write("Hello, ");
$caretaker->saveMemento($editor->saveToMemento());

// Escreva mais e salve novamente
$editor->write("World!");
$caretaker->saveMemento($editor->saveToMemento());

// Mostre o conteúdo atual
echo "Conteúdo Atual: " . $editor->getContent() . "\n";

// Desfazer a última ação
$editor->restoreFromMemento($caretaker->undo());
echo "Após Desfazer: " . $editor->getContent() . "\n";

// Desfazer novamente
$editor->restoreFromMemento($caretaker->undo());
echo "Após Segundo Desfazer: " . $editor->getContent() . "\n";

// Refazer a última ação
$editor->restoreFromMemento($caretaker->redo());
echo "Após Refazer: " . $editor->getContent() . "\n";

// Refazer novamente
$editor->restoreFromMemento($caretaker->redo());
echo "Após Segundo Refazer: " . $editor->getContent() . "\n";
?>
