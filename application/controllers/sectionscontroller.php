<?php
class SectionsController extends Controller{

    protected $biography;
    protected $education;
    protected $careers;
    protected $abilities;

    //User does not need to actually see this part
    public function index(){
        header("Location: " + BASE_URL); // should not have access to this, reroute to the main page
    }

    //The Biography Section
    public function profile(){
        $this->biography = new Biography();
        $bio = $this->biography->getActiveBio();
        //Send the biography details to the view
        $this->set('bio', $bio);
    }

     //The Opportunities Section
     public function opportunities(){
        $this->education = new Education();
        $education = $this->education->getEducation();

        $this->careers = new Careers();
        $careers = $this->careers->getCareers();

        $this->set('schools', $education);
        $this->set('careers', $careers);
     }

     // abilities
    public function skills(){
        $this->abilities = new Abilities();
        $skills = $this->abilities->getInfo("Skill");
        $languages = $this->abilities->getInfo("Language");
        $tools = $this->abilities->getInfo("Tool");

        $this->set('skills', $skills);
        $this->set('languages', $languages);
        $this->set('tools', $tools);
    }

    //contact
    public function contact(){

    }
}