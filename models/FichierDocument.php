<?php


class FichierDocument
{
    private $idFichierDocument;
    private $libelle;
    private $idDocument;

    /**
     * FichierDocument constructor.
     * @param $idFichierDocument
     * @param $libelle
     * @param $idDocument
     */
    public function __construct($idFichierDocument, $libelle, $idDocument)
    {
        $this->idFichierDocument = $idFichierDocument;
        $this->libelle = $libelle;
        $this->idDocument = $idDocument;
    }

    /**
     * @return mixed
     */
    public function getIdFichierDocument()
    {
        return $this->idFichierDocument;
    }

    /**
     * @param mixed $idFichierDocument
     */
    public function setIdFichierDocument($idFichierDocument)
    {
        $this->idFichierDocument = $idFichierDocument;
    }

    /**
     * @return mixed
     */
    public function getLibelle()
    {
        return $this->libelle;
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


}