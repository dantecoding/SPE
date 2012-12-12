<?php
require_once("autoload.php");

/**
 * Created by JetBrains PhpStorm.
 * User: dante
 * Date: 11.12.12
 * Time: 18:49
 * To change this template use File | Settings | File Templates.
 */
class Register
{
    private $as;
    private $jobless;
    private $dec;
    private $regWork;
    private $claim;
    private $org;
    private $vac;

    public function __construct()
    {

        $this->as = new AddressSpecification();
        $this->jobless = new JoblessList();
        $this->claim = new ClaimVacancy();
        $this->regWork = new RegisteredWork();
        $this->org = new OrganizationList();
        $this->vac = new VacancyList();
        $this->dec = new Declaration();

    }

    public function getDec()
    {
        return $this->dec;
    }

    public function getClaim()
    {
        return $this->claim;
    }

    public function newDeclaration()
    {

    }

    public function saveDeclaration()
    {
        $this->jobless->saveDeclaration($this->dec);
    }

    public function setName($name)
    {
        $jobless = new JoblessList();
        if ($this->dec->setName($jobless, $name))
            return false;
        else
            return true;
    }

    public function setAddress($address)
    {
        $addrSpec = new AddressSpecification();
        $this->dec->setAddress($addrSpec, $address);
    }

    public function setInfo($job, $dateOut, $working, $stage)
    {
        $this->dec->setInfo($this->regWork, $job, $dateOut, $working, $stage);
    }

    public function newClaimVacancy()
    {

    }

    public function setAddressOrganization($address)
    {
        $this->claim->setAddress($address);
    }

    public function setWork($work, $post)
    {
        $this->claim->setWork($work, $post);
    }

    public function saveVacancy()
    {
        $this->vac->addVacancy($this->claim);
    }

}
