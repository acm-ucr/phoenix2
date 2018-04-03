<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class RedirectController extends Controller
{
    /**
     * @Route("/venmo", name="venmo")
     */
    public function venmo(Request $request)
    {
        return $this->redirect('https://venmo.com/ACMUCR');
    }

    /**
     * @Route("/fb", name="fb")
     */
    public function fb(Request $request)
    {
        return $this->redirect('https://www.facebook.com/groups/acm.at.ucr/');
    }

    /**
     * @Route("/icpcbootcamp", name="icpcbootcamp")
     */
    public function icpcbootcamp(Request $request)
    {
        return $this->redirect('https://goo.gl/forms/ur5YQnChDKNAVvps2');
    }

    /**
     * @Route("/mentor", name="mentor")
     */
    public function mentor(Request $request)
    {
        return $this->redirect('https://goo.gl/forms/rv1TcYbiVntUPOBu2');
    }

    /**
     * @Route("/mentee", name="mentee")
     */
    public function mentee(Request $request)
    {
        return $this->redirect('https://goo.gl/forms/WOdoWhl4O8VBos282');
    }

    /**
     * @Route("/incubator", name="incubator")
     */
    public function incubator(Request $request)
    {
        return $this->redirect('https://docs.google.com/document/d/1xKG3rjqUFuj_WnjKpoqQHeQP3hquP8xYX1rIx9yucbM/edit?usp=sharing');
    }

    /**
     * @Route("/officehours", name="officehours")
     */
    public function officehours(Request $request)
    {
        return $this->redirect('https://calendar.google.com/calendar/embed?src=ucr.edu_s81hcr5v7sgqhdvnhi2re01dkg%40group.calendar.google.com&ctz=America%2FLos_Angeles');
    }

    /**
     * @Route("/resumebank", name="resumebank")
     */
    public function resumebank(Request $request)
    {
        return $this->redirect('https://docs.google.com/forms/d/e/1FAIpQLSc4BxYshPRaPNbKAW4YSrQ_tXgsTVRSAWKb7NdeemKikqiRvA/viewform');
    }

    /**
     * @Route("/interviews", name="interviews")
     */
    public function interviews(Request $request)
    {
        return $this->redirect('https://docs.google.com/forms/d/e/1FAIpQLSf4udhYICi9aVrvDxu2NAK7nLznMvcLXnxO_KR8zb0L4540CA/viewform');
    }

    /**
     * @Route("/checkin", name="checkin")
     */
    public function checkin(Request $request)
    {
        return $this->redirect('https://goo.gl/forms/TCY0AKDOvJuSNGYh1');
    }

    /**
     * @Route("/hourofcode", name="hourofcode")
     */
    public function hourofcode(Request $request)
    {
        return $this->redirect('https://acm-ucr.github.io/hour-of-code/');
    }

    /**
     * @Route("/python", name="python")
     */
    public function python(Request $request)
    {
        return $this->redirect('https://docs.google.com/forms/d/e/1FAIpQLSccB64QiKyMMnD2TBIEE9N4Wiqre1LBiTf8dDV53ccBk_kgSw/viewform');
    }

    /**
     * @Route("/bashrc", name="bashrc")
     */
    public function bashrc(Request $request)
    {
        return $this->redirect('https://gist.github.com/aarohmankad/b5a2fdee10e311c02aaf1cd57aebbc16');
    }

    /**
     * @Route("/vimrc", name="vimrc")
     */
    public function vimrc(Request $request)
    {
        return $this->redirect('https://gist.github.com/aarohmankad/ef93e60f70cbbd83148f2d21aac41da4');
    }

    /**
     * @Route("/slack", name="slack")
     */
    public function slack(Request $request)
    {
        return $this->redirect('https://join.slack.com/t/acm-ucr/shared_invite/enQtMjc2NTE2MDU1ODEwLThhYzUwYzQ4N2E1NWM0NDY1OTVkNTE1NzM4YjU4YjRjMmJiZDY1YzY2NTBjNmNiYjU0NTQxZDMwY2U4MDc4YmM');
    }

    /**
     * @Route("/tshirt", name="tshirt")
     */
    public function tshirt(Request $request)
    {
        return $this->redirect('https://goo.gl/forms/nN3aZGM3LHZXwLsu1');
    }

    /**
     * @Route("/w", name="w")
     */
    public function w(Request $request)
    {
        return $this->redirect('https://docs.google.com/forms/d/e/1FAIpQLSezoQwb0MUBA1Q3ikn8z2_GNM9IcRQ5HZ3HIiSiPvYx1WYdQg/viewform');
    }

    /**
     * @Route("/raspberry", name="raspberry")
     */
    public function raspberry(Request $request)
    {
        return $this->redirect('http://bit.ly/2ACt7jA');
    }

    /**
     * @Route("/gm5", name="gm5")
     */
    public function gm5(Request $request)
    {
        return $this->redirect('https://docs.google.com/presentation/d/18kyNzk_PTiiUX-lLDvtKoXpJ2b-2VK4e-G5YzFcm0lQ/edit?usp=sharing');
    }

    /**
     * @Route("/peopleofacm", name="peopleofacm")
     */
    public function peopleofacm(Request $request)
    {
        return $this->redirect('https://people-of-acm.firebaseapp.com/#/');
    }

    /**
     * @Route("/msg", name="msg")
     */
    public function msg(Request $request)
    {
        return $this->redirect('https://m.me/join/AbZhz8-NbCaxhCyU');
    }

    /**
     * @Route("/dodgeball", name="dodgeball")
     */
    public function dodgeball(Request $request)
    {
        return $this->redirect('https://goo.gl/forms/MGFjnPfvDdgSHd793');
    }

    /**
     * @Route("/unconference", name="unconference")
     */
    public function unconference(Request $request)
    {
        return $this->redirect('https://goo.gl/forms/JqiM7coNf2Tto0U22');
    }
    
    /**
     * @Route("/elections", name="elections")
     */
    public function elections(Request $request)
    {
        return $this->redirect('https://goo.gl/forms/ftCjTYLvtQjmis1C3');
    }

    /**
     * @Route("/unconference", name="unconference")
     */
    public function unconference(Request $request)
    {
        return $this->redirect('http://acm-ucr.github.io/unconference/');
    }
}
