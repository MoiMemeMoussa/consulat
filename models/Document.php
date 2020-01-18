<?php


class Document
{
    private $idDocument;
    private $type;
    private $email;

    /**
     * Document constructor.
     * @param $idDocument
     * @param $type
     * @param $email
     */
    public function __construct($idDocument, $type, $email)
    {
        $this->idDocument = $idDocument;
        $this->type = $type;
        $this->email = $email;
    }


    /**
     * @return mixed
     */
    public function getIdDocument()
    {
        return $this->idDocument;
    }

    /**
     * @param mixed $idDocument
     */
    public function setIdDocument($idDocument)
    {
        $this->idDocument = $idDocument;
    }


    /**
     * @param mixed $libelle
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }


}