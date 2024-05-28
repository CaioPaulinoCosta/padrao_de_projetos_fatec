<?php
class Caretaker {
    private $mementoList = [];
    private $currentIndex = -1;

    public function saveMemento($memento) {
        // Se fizermos uma nova alteração após desfazer, removemos todos os mementos futuros
        if ($this->currentIndex + 1 < count($this->mementoList)) {
            $this->mementoList = array_slice($this->mementoList, 0, $this->currentIndex + 1);
        }
        $this->mementoList[] = $memento;
        $this->currentIndex++;
    }

    public function undo() {
        if ($this->currentIndex <= 0) {
            return null;
        }
        $this->currentIndex--;
        return $this->mementoList[$this->currentIndex];
    }

    public function redo() {
        if ($this->currentIndex >= count($this->mementoList) - 1) {
            return null;
        }
        $this->currentIndex++;
        return $this->mementoList[$this->currentIndex];
    }
}
?>
