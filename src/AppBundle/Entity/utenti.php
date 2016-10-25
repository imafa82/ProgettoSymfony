<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraint as Assert;

/**
 * utenti
 *
 * @ORM\Table(name="utenti")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\utentiRepository")
 */
class utenti
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="codiceUte", type="string", length=4, unique=true)
     */
    private $codiceUte;

    /**
     * @var string
     *
     * @ORM\Column(name="cognome", type="string", length=150)
     */
    private $cognome;

    /**
     * @var string
     *
     * @ORM\Column(name="nome", type="string", length=150)
     */
    private $nome;

    /**
     * @var string
     *
     * @ORM\Column(name="Mail", type="string", length=200, unique=true)
     */
    private $mail;

    /**
     * @var string
     *
     * @ORM\Column(name="Tel", type="string", length=50, nullable=true)
     */
    private $tel;

    /**
     * @var string
     *
     * @ORM\Column(name="Fax", type="string", length=50, nullable=true)
     */
    private $fax;

    /**
     * @var string
     *
     * @ORM\Column(name="Cell", type="string", length=100, nullable=true)
     */
    private $cell;

    /**
     * @var string
     *
     * @ORM\Column(name="indirizzo", type="string", length=255, nullable=true)
     */
    private $indirizzo;

    /**
     * @var string
     *
     * @ORM\Column(name="citta", type="string", length=255, nullable=true)
     */
    private $citta;

    /**
     * @var int
     *
     * @ORM\Column(name="idreg", type="smallint", nullable=true)
     */
    private $idreg;

    /**
     * @var int
     *
     * @ORM\Column(name="idpro", type="smallint", nullable=true)
     */
    private $idpro;

    /**
     * @var string
     *
     * @ORM\Column(name="prov", type="string", length=255, nullable=true)
     */
    private $prov;

    /**
     * @var int
     *
     * @ORM\Column(name="idplace", type="integer", nullable=true)
     */
    private $idplace;

    /**
     * @var string
     *
     * @ORM\Column(name="place", type="string", length=255, nullable=true)
     */
    private $place;

    /**
     * @var string
     *
     * @ORM\Column(name="Login", type="string", length=50, unique=true)
     */
    private $login;

    /**
     * @var string
     *
     * @ORM\Column(name="Pwd", type="string", length=32)
     */
    private $pwd;

    /**
     * @var int
     *
     * @ORM\Column(name="idOsp", type="integer", nullable=true)
     */
    private $idOsp;

    /**
     * @var string
     *
     * @ORM\Column(name="Profilo", type="string", length=2)
     */
    private $profilo;

    /**
     * @var string
     *
     * @ORM\Column(name="Status", type="string", length=1)
     */
    private $status;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dataAttivazione", type="datetime")
     */
    private $dataAttivazione;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dataAgg", type="datetime", nullable=true)
     */
    private $dataAgg;

    /**
     * @var int
     *
     * @ORM\Column(name="idUteAgg", type="integer", nullable=true)
     */
    private $idUteAgg;

    /**
     * @var string
     *
     * @ORM\Column(name="userSex", type="string", length=1, nullable=true)
     */
    private $userSex;

    /**
     * @var int
     *
     * @ORM\Column(name="userBirthRegId", type="smallint", nullable=true)
     */
    private $userBirthRegId;

    /**
     * @var int
     *
     * @ORM\Column(name="userBirthProvId", type="smallint", nullable=true)
     */
    private $userBirthProvId;

    /**
     * @var string
     *
     * @ORM\Column(name="userBirthProv", type="string", length=255, nullable=true)
     */
    private $userBirthProv;

    /**
     * @var int
     *
     * @ORM\Column(name="userBirthPlaceId", type="integer", nullable=true)
     */
    private $userBirthPlaceId;

    /**
     * @var string
     *
     * @ORM\Column(name="userBirthPlace", type="string", length=255, nullable=true)
     */
    private $userBirthPlace;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="userBirthDay", type="date", nullable=true)
     */
    private $userBirthDay;

    /**
     * @var string
     *
     * @ORM\Column(name="userCFType", type="string", length=1, nullable=true)
     */
    private $userCFType;

    /**
     * @var string
     *
     * @ORM\Column(name="userCodFisc", type="string", length=16, nullable=true)
     */
    private $userCodFisc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="userSTPExpDate", type="date", nullable=true)
     */
    private $userSTPExpDate;

    /**
     * @var string
     *
     * @ORM\Column(name="userCittadinanza", type="string", length=20, nullable=true)
     */
    private $userCittadinanza;

    /**
     * @var string
     *
     * @ORM\Column(name="userStatoCivile", type="string", length=1, nullable=true)
     */
    private $userStatoCivile;

    /**
     * @var string
     *
     * @ORM\Column(name="userAccompagnatore", type="string", length=1, nullable=true)
     */
    private $userAccompagnatore;

    /**
     * @var string
     *
     * @ORM\Column(name="userStudio", type="string", length=1, nullable=true)
     */
    private $userStudio;

    /**
     * @var string
     *
     * @ORM\Column(name="userLavoro", type="string", length=1, nullable=true)
     */
    private $userLavoro;

    /**
     * @var string
     *
     * @ORM\Column(name="userMediatore", type="string", length=1, nullable=true)
     */
    private $userMediatore;

    /**
     * @var int
     *
     * @ORM\Column(name="userASLid", type="smallint", nullable=true)
     */
    private $userASLid;

    /**
     * @var string
     *
     * @ORM\Column(name="userMedico", type="string", length=35, nullable=true)
     */
    private $userMedico;

    /**
     * @var string
     *
     * @ORM\Column(name="userGruppo", type="string", length=1, nullable=true)
     */
    private $userGruppo;

    /**
     * @var string
     *
     * @ORM\Column(name="userRh", type="string", length=1, nullable=true)
     */
    private $userRh;

    /**
     * @var string
     *
     * @ORM\Column(name="userRosolia", type="string", length=1, nullable=true)
     */
    private $userRosolia;

    /**
     * @var string
     *
     * @ORM\Column(name="userMorbillo", type="string", length=1, nullable=true)
     */
    private $userMorbillo;

    /**
     * @var string
     *
     * @ORM\Column(name="userVaricella", type="string", length=1, nullable=true)
     */
    private $userVaricella;

    /**
     * @var string
     *
     * @ORM\Column(name="userHBV", type="string", length=1, nullable=true)
     */
    private $userHBV;

    /**
     * @var string
     *
     * @ORM\Column(name="userHCV", type="string", length=1, nullable=true)
     */
    private $userHCV;

    /**
     * @var string
     *
     * @ORM\Column(name="userHIV", type="string", length=1, nullable=true)
     */
    private $userHIV;

    /**
     * @var string
     *
     * @ORM\Column(name="userLue", type="string", length=1, nullable=true)
     */
    private $userLue;

    /**
     * @var string
     *
     * @ORM\Column(name="userCMV", type="string", length=1, nullable=true)
     */
    private $userCMV;

    /**
     * @var string
     *
     * @ORM\Column(name="userToxo", type="string", length=1, nullable=true)
     */
    private $userToxo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dataCreazione", type="datetime", nullable=true)
     */
    private $dataCreazione;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_send_credential", type="datetime", nullable=true)
     */
    private $dateSendCredential;

    /**
     * @var string
     *
     * @ORM\Column(name="hasRelatives", type="string", length=1, nullable=true)
     */
    private $hasRelatives;

    /**
     * @var int
     *
     * @ORM\Column(name="welfare_worker", type="smallint", nullable=true)
     */
    private $welfareWorker;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set codiceUte
     *
     * @param string $codiceUte
     *
     * @return utenti
     */
    public function setCodiceUte($codiceUte)
    {
        $this->codiceUte = $codiceUte;

        return $this;
    }

    /**
     * Get codiceUte
     *
     * @return string
     */
    public function getCodiceUte()
    {
        return $this->codiceUte;
    }

    /**
     * Set cognome
     *
     * @param string $cognome
     *
     * @return utenti
     */
    public function setCognome($cognome)
    {
        $this->cognome = $cognome;

        return $this;
    }

    /**
     * Get cognome
     *
     * @return string
     */
    public function getCognome()
    {
        return $this->cognome;
    }

    /**
     * Set nome
     *
     * @param string $nome
     *
     * @return utenti
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get nome
     *
     * @return string
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set mail
     *
     * @param string $mail
     *
     * @return utenti
     */
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get mail
     *
     * @return string
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set tel
     *
     * @param string $tel
     *
     * @return utenti
     */
    public function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
    }

    /**
     * Get tel
     *
     * @return string
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Set fax
     *
     * @param string $fax
     *
     * @return utenti
     */
    public function setFax($fax)
    {
        $this->fax = $fax;

        return $this;
    }

    /**
     * Get fax
     *
     * @return string
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Set cell
     *
     * @param string $cell
     *
     * @return utenti
     */
    public function setCell($cell)
    {
        $this->cell = $cell;

        return $this;
    }

    /**
     * Get cell
     *
     * @return string
     */
    public function getCell()
    {
        return $this->cell;
    }

    /**
     * Set indirizzo
     *
     * @param string $indirizzo
     *
     * @return utenti
     */
    public function setIndirizzo($indirizzo)
    {
        $this->indirizzo = $indirizzo;

        return $this;
    }

    /**
     * Get indirizzo
     *
     * @return string
     */
    public function getIndirizzo()
    {
        return $this->indirizzo;
    }

    /**
     * Set citta
     *
     * @param string $citta
     *
     * @return utenti
     */
    public function setCitta($citta)
    {
        $this->citta = $citta;

        return $this;
    }

    /**
     * Get citta
     *
     * @return string
     */
    public function getCitta()
    {
        return $this->citta;
    }

    /**
     * Set idreg
     *
     * @param integer $idreg
     *
     * @return utenti
     */
    public function setIdreg($idreg)
    {
        $this->idreg = $idreg;

        return $this;
    }

    /**
     * Get idreg
     *
     * @return int
     */
    public function getIdreg()
    {
        return $this->idreg;
    }

    /**
     * Set idpro
     *
     * @param integer $idpro
     *
     * @return utenti
     */
    public function setIdpro($idpro)
    {
        $this->idpro = $idpro;

        return $this;
    }

    /**
     * Get idpro
     *
     * @return int
     */
    public function getIdpro()
    {
        return $this->idpro;
    }

    /**
     * Set prov
     *
     * @param string $prov
     *
     * @return utenti
     */
    public function setProv($prov)
    {
        $this->prov = $prov;

        return $this;
    }

    /**
     * Get prov
     *
     * @return string
     */
    public function getProv()
    {
        return $this->prov;
    }

    /**
     * Set idplace
     *
     * @param integer $idplace
     *
     * @return utenti
     */
    public function setIdplace($idplace)
    {
        $this->idplace = $idplace;

        return $this;
    }

    /**
     * Get idplace
     *
     * @return int
     */
    public function getIdplace()
    {
        return $this->idplace;
    }

    /**
     * Set place
     *
     * @param string $place
     *
     * @return utenti
     */
    public function setPlace($place)
    {
        $this->place = $place;

        return $this;
    }

    /**
     * Get place
     *
     * @return string
     */
    public function getPlace()
    {
        return $this->place;
    }

    /**
     * Set login
     *
     * @param string $login
     *
     * @return utenti
     */
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Get login
     *
     * @return string
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set pwd
     *
     * @param string $pwd
     *
     * @return utenti
     */
    public function setPwd($pwd)
    {
        $this->pwd = $pwd;

        return $this;
    }

    /**
     * Get pwd
     *
     * @return string
     */
    public function getPwd()
    {
        return $this->pwd;
    }

    /**
     * Set idOsp
     *
     * @param integer $idOsp
     *
     * @return utenti
     */
    public function setIdOsp($idOsp)
    {
        $this->idOsp = $idOsp;

        return $this;
    }

    /**
     * Get idOsp
     *
     * @return int
     */
    public function getIdOsp()
    {
        return $this->idOsp;
    }

    /**
     * Set profilo
     *
     * @param string $profilo
     *
     * @return utenti
     */
    public function setProfilo($profilo)
    {
        $this->profilo = $profilo;

        return $this;
    }

    /**
     * Get profilo
     *
     * @return string
     */
    public function getProfilo()
    {
        return $this->profilo;
    }

    /**
     * Set status
     *
     * @param string $status
     *
     * @return utenti
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set dataAttivazione
     *
     * @param \DateTime $dataAttivazione
     *
     * @return utenti
     */
    public function setDataAttivazione($dataAttivazione)
    {
        $this->dataAttivazione = $dataAttivazione;

        return $this;
    }

    /**
     * Get dataAttivazione
     *
     * @return \DateTime
     */
    public function getDataAttivazione()
    {
        return $this->dataAttivazione;
    }

    /**
     * Set dataAgg
     *
     * @param \DateTime $dataAgg
     *
     * @return utenti
     */
    public function setDataAgg($dataAgg)
    {
        $this->dataAgg = $dataAgg;

        return $this;
    }

    /**
     * Get dataAgg
     *
     * @return \DateTime
     */
    public function getDataAgg()
    {
        return $this->dataAgg;
    }

    /**
     * Set idUteAgg
     *
     * @param integer $idUteAgg
     *
     * @return utenti
     */
    public function setIdUteAgg($idUteAgg)
    {
        $this->idUteAgg = $idUteAgg;

        return $this;
    }

    /**
     * Get idUteAgg
     *
     * @return int
     */
    public function getIdUteAgg()
    {
        return $this->idUteAgg;
    }

    /**
     * Set userSex
     *
     * @param string $userSex
     *
     * @return utenti
     */
    public function setUserSex($userSex)
    {
        $this->userSex = $userSex;

        return $this;
    }

    /**
     * Get userSex
     *
     * @return string
     */
    public function getUserSex()
    {
        return $this->userSex;
    }

    /**
     * Set userBirthRegId
     *
     * @param integer $userBirthRegId
     *
     * @return utenti
     */
    public function setUserBirthRegId($userBirthRegId)
    {
        $this->userBirthRegId = $userBirthRegId;

        return $this;
    }

    /**
     * Get userBirthRegId
     *
     * @return int
     */
    public function getUserBirthRegId()
    {
        return $this->userBirthRegId;
    }

    /**
     * Set userBirthProvId
     *
     * @param integer $userBirthProvId
     *
     * @return utenti
     */
    public function setUserBirthProvId($userBirthProvId)
    {
        $this->userBirthProvId = $userBirthProvId;

        return $this;
    }

    /**
     * Get userBirthProvId
     *
     * @return int
     */
    public function getUserBirthProvId()
    {
        return $this->userBirthProvId;
    }

    /**
     * Set userBirthProv
     *
     * @param string $userBirthProv
     *
     * @return utenti
     */
    public function setUserBirthProv($userBirthProv)
    {
        $this->userBirthProv = $userBirthProv;

        return $this;
    }

    /**
     * Get userBirthProv
     *
     * @return string
     */
    public function getUserBirthProv()
    {
        return $this->userBirthProv;
    }

    /**
     * Set userBirthPlaceId
     *
     * @param integer $userBirthPlaceId
     *
     * @return utenti
     */
    public function setUserBirthPlaceId($userBirthPlaceId)
    {
        $this->userBirthPlaceId = $userBirthPlaceId;

        return $this;
    }

    /**
     * Get userBirthPlaceId
     *
     * @return int
     */
    public function getUserBirthPlaceId()
    {
        return $this->userBirthPlaceId;
    }

    /**
     * Set userBirthPlace
     *
     * @param string $userBirthPlace
     *
     * @return utenti
     */
    public function setUserBirthPlace($userBirthPlace)
    {
        $this->userBirthPlace = $userBirthPlace;

        return $this;
    }

    /**
     * Get userBirthPlace
     *
     * @return string
     */
    public function getUserBirthPlace()
    {
        return $this->userBirthPlace;
    }

    /**
     * Set userBirthDay
     *
     * @param \DateTime $userBirthDay
     *
     * @return utenti
     */
    public function setUserBirthDay($userBirthDay)
    {
        $this->userBirthDay = $userBirthDay;

        return $this;
    }

    /**
     * Get userBirthDay
     *
     * @return \DateTime
     */
    public function getUserBirthDay()
    {
        return $this->userBirthDay;
    }

    /**
     * Set userCFType
     *
     * @param string $userCFType
     *
     * @return utenti
     */
    public function setUserCFType($userCFType)
    {
        $this->userCFType = $userCFType;

        return $this;
    }

    /**
     * Get userCFType
     *
     * @return string
     */
    public function getUserCFType()
    {
        return $this->userCFType;
    }

    /**
     * Set userCodFisc
     *
     * @param string $userCodFisc
     *
     * @return utenti
     */
    public function setUserCodFisc($userCodFisc)
    {
        $this->userCodFisc = $userCodFisc;

        return $this;
    }

    /**
     * Get userCodFisc
     *
     * @return string
     */
    public function getUserCodFisc()
    {
        return $this->userCodFisc;
    }

    /**
     * Set userSTPExpDate
     *
     * @param \DateTime $userSTPExpDate
     *
     * @return utenti
     */
    public function setUserSTPExpDate($userSTPExpDate)
    {
        $this->userSTPExpDate = $userSTPExpDate;

        return $this;
    }

    /**
     * Get userSTPExpDate
     *
     * @return \DateTime
     */
    public function getUserSTPExpDate()
    {
        return $this->userSTPExpDate;
    }

    /**
     * Set userCittadinanza
     *
     * @param string $userCittadinanza
     *
     * @return utenti
     */
    public function setUserCittadinanza($userCittadinanza)
    {
        $this->userCittadinanza = $userCittadinanza;

        return $this;
    }

    /**
     * Get userCittadinanza
     *
     * @return string
     */
    public function getUserCittadinanza()
    {
        return $this->userCittadinanza;
    }

    /**
     * Set userStatoCivile
     *
     * @param string $userStatoCivile
     *
     * @return utenti
     */
    public function setUserStatoCivile($userStatoCivile)
    {
        $this->userStatoCivile = $userStatoCivile;

        return $this;
    }

    /**
     * Get userStatoCivile
     *
     * @return string
     */
    public function getUserStatoCivile()
    {
        return $this->userStatoCivile;
    }

    /**
     * Set userAccompagnatore
     *
     * @param string $userAccompagnatore
     *
     * @return utenti
     */
    public function setUserAccompagnatore($userAccompagnatore)
    {
        $this->userAccompagnatore = $userAccompagnatore;

        return $this;
    }

    /**
     * Get userAccompagnatore
     *
     * @return string
     */
    public function getUserAccompagnatore()
    {
        return $this->userAccompagnatore;
    }

    /**
     * Set userStudio
     *
     * @param string $userStudio
     *
     * @return utenti
     */
    public function setUserStudio($userStudio)
    {
        $this->userStudio = $userStudio;

        return $this;
    }

    /**
     * Get userStudio
     *
     * @return string
     */
    public function getUserStudio()
    {
        return $this->userStudio;
    }

    /**
     * Set userLavoro
     *
     * @param string $userLavoro
     *
     * @return utenti
     */
    public function setUserLavoro($userLavoro)
    {
        $this->userLavoro = $userLavoro;

        return $this;
    }

    /**
     * Get userLavoro
     *
     * @return string
     */
    public function getUserLavoro()
    {
        return $this->userLavoro;
    }

    /**
     * Set userMediatore
     *
     * @param string $userMediatore
     *
     * @return utenti
     */
    public function setUserMediatore($userMediatore)
    {
        $this->userMediatore = $userMediatore;

        return $this;
    }

    /**
     * Get userMediatore
     *
     * @return string
     */
    public function getUserMediatore()
    {
        return $this->userMediatore;
    }

    /**
     * Set userASLid
     *
     * @param integer $userASLid
     *
     * @return utenti
     */
    public function setUserASLid($userASLid)
    {
        $this->userASLid = $userASLid;

        return $this;
    }

    /**
     * Get userASLid
     *
     * @return int
     */
    public function getUserASLid()
    {
        return $this->userASLid;
    }

    /**
     * Set userMedico
     *
     * @param string $userMedico
     *
     * @return utenti
     */
    public function setUserMedico($userMedico)
    {
        $this->userMedico = $userMedico;

        return $this;
    }

    /**
     * Get userMedico
     *
     * @return string
     */
    public function getUserMedico()
    {
        return $this->userMedico;
    }

    /**
     * Set userGruppo
     *
     * @param string $userGruppo
     *
     * @return utenti
     */
    public function setUserGruppo($userGruppo)
    {
        $this->userGruppo = $userGruppo;

        return $this;
    }

    /**
     * Get userGruppo
     *
     * @return string
     */
    public function getUserGruppo()
    {
        return $this->userGruppo;
    }

    /**
     * Set userRh
     *
     * @param string $userRh
     *
     * @return utenti
     */
    public function setUserRh($userRh)
    {
        $this->userRh = $userRh;

        return $this;
    }

    /**
     * Get userRh
     *
     * @return string
     */
    public function getUserRh()
    {
        return $this->userRh;
    }

    /**
     * Set userRosolia
     *
     * @param string $userRosolia
     *
     * @return utenti
     */
    public function setUserRosolia($userRosolia)
    {
        $this->userRosolia = $userRosolia;

        return $this;
    }

    /**
     * Get userRosolia
     *
     * @return string
     */
    public function getUserRosolia()
    {
        return $this->userRosolia;
    }

    /**
     * Set userMorbillo
     *
     * @param string $userMorbillo
     *
     * @return utenti
     */
    public function setUserMorbillo($userMorbillo)
    {
        $this->userMorbillo = $userMorbillo;

        return $this;
    }

    /**
     * Get userMorbillo
     *
     * @return string
     */
    public function getUserMorbillo()
    {
        return $this->userMorbillo;
    }

    /**
     * Set userVaricella
     *
     * @param string $userVaricella
     *
     * @return utenti
     */
    public function setUserVaricella($userVaricella)
    {
        $this->userVaricella = $userVaricella;

        return $this;
    }

    /**
     * Get userVaricella
     *
     * @return string
     */
    public function getUserVaricella()
    {
        return $this->userVaricella;
    }

    /**
     * Set userHBV
     *
     * @param string $userHBV
     *
     * @return utenti
     */
    public function setUserHBV($userHBV)
    {
        $this->userHBV = $userHBV;

        return $this;
    }

    /**
     * Get userHBV
     *
     * @return string
     */
    public function getUserHBV()
    {
        return $this->userHBV;
    }

    /**
     * Set userHCV
     *
     * @param string $userHCV
     *
     * @return utenti
     */
    public function setUserHCV($userHCV)
    {
        $this->userHCV = $userHCV;

        return $this;
    }

    /**
     * Get userHCV
     *
     * @return string
     */
    public function getUserHCV()
    {
        return $this->userHCV;
    }

    /**
     * Set userHIV
     *
     * @param string $userHIV
     *
     * @return utenti
     */
    public function setUserHIV($userHIV)
    {
        $this->userHIV = $userHIV;

        return $this;
    }

    /**
     * Get userHIV
     *
     * @return string
     */
    public function getUserHIV()
    {
        return $this->userHIV;
    }

    /**
     * Set userLue
     *
     * @param string $userLue
     *
     * @return utenti
     */
    public function setUserLue($userLue)
    {
        $this->userLue = $userLue;

        return $this;
    }

    /**
     * Get userLue
     *
     * @return string
     */
    public function getUserLue()
    {
        return $this->userLue;
    }

    /**
     * Set userCMV
     *
     * @param string $userCMV
     *
     * @return utenti
     */
    public function setUserCMV($userCMV)
    {
        $this->userCMV = $userCMV;

        return $this;
    }

    /**
     * Get userCMV
     *
     * @return string
     */
    public function getUserCMV()
    {
        return $this->userCMV;
    }

    /**
     * Set userToxo
     *
     * @param string $userToxo
     *
     * @return utenti
     */
    public function setUserToxo($userToxo)
    {
        $this->userToxo = $userToxo;

        return $this;
    }

    /**
     * Get userToxo
     *
     * @return string
     */
    public function getUserToxo()
    {
        return $this->userToxo;
    }

    /**
     * Set dataCreazione
     *
     * @param \DateTime $dataCreazione
     *
     * @return utenti
     */
    public function setDataCreazione($dataCreazione)
    {
        $this->dataCreazione = $dataCreazione;

        return $this;
    }

    /**
     * Get dataCreazione
     *
     * @return \DateTime
     */
    public function getDataCreazione()
    {
        return $this->dataCreazione;
    }

    /**
     * Set dateSendCredential
     *
     * @param \DateTime $dateSendCredential
     *
     * @return utenti
     */
    public function setDateSendCredential($dateSendCredential)
    {
        $this->dateSendCredential = $dateSendCredential;

        return $this;
    }

    /**
     * Get dateSendCredential
     *
     * @return \DateTime
     */
    public function getDateSendCredential()
    {
        return $this->dateSendCredential;
    }

    /**
     * Set hasRelatives
     *
     * @param string $hasRelatives
     *
     * @return utenti
     */
    public function setHasRelatives($hasRelatives)
    {
        $this->hasRelatives = $hasRelatives;

        return $this;
    }

    /**
     * Get hasRelatives
     *
     * @return string
     */
    public function getHasRelatives()
    {
        return $this->hasRelatives;
    }

    /**
     * Set welfareWorker
     *
     * @param integer $welfareWorker
     *
     * @return utenti
     */
    public function setWelfareWorker($welfareWorker)
    {
        $this->welfareWorker = $welfareWorker;

        return $this;
    }

    /**
     * Get welfareWorker
     *
     * @return int
     */
    public function getWelfareWorker()
    {
        return $this->welfareWorker;
    }
}

