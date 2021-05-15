<?php

class Quizz
{
    private $id;
    private $question;
    private $listeQuestion;
    private $reponse;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->id = $id;
        return $this;
    }

    public function getQuestion(): string
    {
        return $this->question;
    }

    public function setQuestion(string $question): self
    {
        $this->question = $question;
        return $this;
    }

    public function getListeQuestion(): string
    {
        return $this->listeQuestion;
    }

    public function setListeQuestion(string $listeQuestion): self
    {
        $this->listeQuestion = $listeQuestion;
        return $this;
    }

    public function getReponse(): string
    {
        return $this->reponse;
    }

    public function setReponse(string $reponse): self
    {
        $this->reponse = $reponse;
        return $this;
    }
}
