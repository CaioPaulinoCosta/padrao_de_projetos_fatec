<?php
class Editor {
    private $content = "";

    public function write($text) {
        $this->content .= $text;
    }

    public function getContent() {
        return $this->content;
    }

    public function setContent($content) {
        $this->content = $content;
    }

    public function saveToMemento() {
        return new Memento($this->content);
    }

    public function restoreFromMemento($memento) {
        $this->content = $memento->getState();
    }
}
?>
