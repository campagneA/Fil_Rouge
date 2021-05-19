<?php

class Boutique
{

  private $id;
  private $image;
  private $description;
  private $prix;
  private $titre;


  public function getId(): int
  {
    return $this->id;
  }

  public function setId(int $id): self
  {
    $this->id = $id;
    return $this;
  }

  public function getImage()
  {
    return $this->image;
  }

  public function setImage($image)
  {
    $this->image = $image;
    return $this;
  }

  public function getDescription(): string
  {
    return $this->description;
  }

  public function setDescription(string $description): self
  {
    $this->description = $description;
    return $this;
  }

  public function getPrix(): int
  {
    return $this->prix;
  }

  public function setPrix(int $prix): self
  {
    $this->prix = $prix;
    return $this;
  }

  /**
   * Get the value of titre
   */
  public function getTitre()
  {
    return $this->titre;
  }

  /**
   * Set the value of titre
   *
   * @return  self
   */
  public function setTitre($titre)
  {
    $this->titre = $titre;

    return $this;
  }
}
