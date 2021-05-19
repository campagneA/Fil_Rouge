<?php

class Quizz
{
  private $id;
  private $question;
  private $listeReponses;
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


  public function getReponse(): string
  {
    return $this->reponse;
  }

  public function setReponse(string $reponse): self
  {
    $this->reponse = $reponse;
    return $this;
  }

  /**
   * Get the value of listeReponses
   */
  public function getListeReponses()
  {
    return $this->listeReponses;
  }

  /**
   * Set the value of listeReponses
   *
   * @return  self
   */
  public function setListeReponses($listeReponses)
  {
    $this->listeReponses = $listeReponses;

    return $this;
  }
}
