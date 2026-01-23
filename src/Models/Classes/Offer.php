<?php
require_once "Recruteur.php";
require_once "Condidate.php";

enum offerState:string{
    case ACIVE = "active";
    case PAUSED = "paused";
    case DRAFT = "draft";
}

enum offerType:string{
     case REMOTE = "remote";
     case ON_SITE = "on site";
     case HYBRID = "hybrid";
}


class Offer{
    private int $id;
    private string $title;
    private string $description;
    private int $category_id;
    private int $recruiter_id;
    private offerState $status;
    private offerType $type;

    // Getter for id
    public function getId(): int {
        return $this->id;
    }

    // Setter for id
    public function setId(int $id): void {
        $this->id = $id;
    }

    // Getter for title
    public function getTitle(): string {
        return $this->title;
    }

    // Setter for title
    public function setTitle(string $title): void {
        $this->title = $title;
    }

    // Getter for description
    public function getDescription(): string {
        return $this->description;
    }

    // Setter for description
    public function setDescription(string $description): void {
        $this->description = $description;
    }

    // Getter for categorie
    public function getCategorieId(): int {
        return $this->category_id;
    }

    // Setter for categorie
    public function setCategorieId(int $id): void {
        $this->category_id = $id;
    }

    // Getter for recruiter
    public function getRecruiterId(): int {
        return $this->recruiter_id;
    }

    // Setter for recruiter
    public function setRecruiter(int $id): void {
        $this->recruiter_id = $id;
    }

    // Getter for status
    public function getStatus(): offerState {
        return $this->status;
    }

    // Setter for status
    public function setStatus(offerState $status): void {
        $this->status = $status;
    }

    // Getter for type
    public function getType(): offerType {
        return $this->type;
    }

    // Setter for type
    public function setType(offerType $type): void {
        $this->type = $type;
    }
}