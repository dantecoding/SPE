<?php
require_once("autoload");
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
        $this->dec = new Declaration();
        $this->regWork = new RegisteredWork();
        $this->org = new OrganizationList();
        $this->vac = new VacancyList();

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
        $this->dec->setName($name);
    }

    public function setAddress($address)
    {
        $this->dec->setAddress($address);
    }

    public function setInfo($job, $dateOut, $working, $stage)
    {
        $this->claim->setInfo($job, $dateOut, $working, $stage);
    }

    public function newClaimVacancy()
    {

    }

    public function setAddressOrganization($address)
    {
        $this->claim->setAddress($address);
    }

    public function setWork($work)
    {
        $this->claim->setWork($work);
    }

    public function saveVacancy($vacancy)
    {
        $this->vac->addVacancy($this->claim);
    }

}
