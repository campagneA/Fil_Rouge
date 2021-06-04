<?php

class Boutique
{

  private $id_item;
  private $titre;
  private $name;
  private $format;
  private $image;
  private $cat_id;
  private $description;
  private $prix;
  private $quantite;
  private $date_ajout;


  public function getId_item(): int
  {
    return $this->id_item;
  }

  public function setId_item(int $id_item): self
  {
    $this->id_item = $id_item;
    return $this;
  }

  public function getTitre(): string
  {
    return $this->titre;
  }

  public function setTitre(string $titre): self
  {
    $this->titre = $titre;
    return $this;
  }

  public function getName(): string
  {
    return $this->name;
  }

  public function setName(string $name): self
  {
    $this->name = $name;
    return $this;
  }

  public function getFormat(): string
  {
    return $this->format;
  }

  public function setFormat(string $format): self
  {
    $this->format = $format;
    return $this;
  }

  public function getImage()
  {
    return $this->image;
  }

  public function setImage($image): self
  {
    $this->image = $image;
    return $this;
  }

  public function getCat_id(): int
  {
    return $this->cat_id;
  }

  public function setCat_id(int $cat_id): self
  {
    $this->cat_id = $cat_id;
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

  public function getQuantite(): int
  {
    return $this->quantite;
  }

  public function setQuantite(int $quantite): self
  {
    $this->quantite = $quantite;
    return $this;
  }

  public function getDate_ajout()
  {
    return $this->date_ajout;
  }

  public function setDate_ajout($date_ajout): self
  {
    $this->date_ajout = $date_ajout;
    return $this;
  }
}
