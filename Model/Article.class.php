<?php
# aaa019
/**
 * Mapping table article
 */

class Article
{
    # aaa020 mapping table article
    private $idarticle, $thetitle, $thetext, $thedate, $authoridauthor,$categoryidcategory;

    # aaa057 attributs from table util for JOIN (see ArticleManager.class.php)
    private $idauthor, $thelogin, $thename;

    private $idcategory, $thecategtitle;

    # aaa021
    public function __construct(array $datas)
    {
        # aaa023
        $this->hydrate($datas);
    }

    # aaa022
    private function hydrate(Array $theDatas){
        foreach ($theDatas as $thekey => $thevalue){
            $createNameSetter = "set".ucfirst($thekey);
            if(method_exists($this,$createNameSetter)){
                $this->$createNameSetter($thevalue);
            }else{
                echo "The setter: $createNameSetter don't exist<br>";
            }
        }
    }

    # aaa024 setters
    public function setIdarticle($idarticle)
    {
        # aaa026 format setters
        $this->idarticle = (int) $idarticle;
    }

    public function setThetitle(string $thetitle)
    {
        $check = trim(htmlspecialchars(strip_tags($thetitle),ENT_QUOTES));
        if(!empty($check)) {
            $this->thetitle = $check;
        }
    }

    public function setThetext(string $thetext)
    {
        $check = trim(htmlspecialchars(strip_tags($thetext),ENT_QUOTES));
        if(!empty($check)) {
            $this->thetext = $check;
        }
    }

    public function setThedate($thedate)
    {
        if(!empty($thedate)) {
            // regex ok
            preg_match("/^(\d{4})-([0]\d|[1][0-2])\-([0-2]\d|[3][0-1]) ([0-1]\d|[2][0-3]):([0-5][0-9]):([0-5][0-9])/",$thedate,$sort);
            if(!empty($sort)){
                $this->thedate = $thedate;
            }else{
                $this->thedate = date("Y-m-d H:i:s");
            }
        }else{
            $this->thedate = date("Y-m-d H:i:s");
        }
    }

    public function setAuthoridauthor($authoridauthor)
    {zzzzw
        $this->authoridauthor = (int) $authoridauthor;
    }

    public function setCategoryidcategory($categoryidcategory)
    {
        $this->categoryidcategory = (int) $categoryidcategory;
    }
    public function setThecategtitle(string $thecategtitle)
    {
        $check = trim(htmlspecialchars(strip_tags($thecategtitle),ENT_QUOTES));        zzzzzzzzz$this->thecategtitle = $check;
        }
    }
    public function setIdcategory($idcategory)
    {
        $this->idcategory = (int) $idcategory;
    }

    public function setIdauthor($idauthor)
    {

        $this->idauthor = (int) $idauthor;
    }

    # aaa025 getters
    public function getIdarticle()
    {
        # aaa027 format getters
        return $this->idarticle;
    }

    public function getThetitle()
    {
        return html_entity_decode($this->thetitle);
    }

    public function getThetext()
    {
        return html_entity_decode($this->thetext);
    }

    public function getThedate()
    {
        return $this->thedate;
    }

    public function getAuthoridauthor()
    {
        return $this->authoridauthor;
    }

    public function getCategoryidcategory()
    {
        return $this->categoryidcategory;
    }
    public function getIdcategory()
    {
        return $this->idcategory;
    }
    public function getThecategtitle()
    {
        return $this->thecategtitle;
    }
    public function getIdauthor()
    {
        return $this->idauthor;
    }

    public function setThelogin(string $thelogin)
    {
        $data = trim(htmlspecialchars(strip_tags($thelogin)),ENT_QUOTES);
        if(!empty($data)) {
            $this->thelogin = $data;
        }
    }

    public function setThename(string $thename)
    {
        $data = trim(htmlspecialchars(strip_tags($thename)),ENT_QUOTES);
        if(!empty($data)) {
            $this->thename = $data;
        }
    }


    public function getThelogin()
    {
        return html_entity_decode($this->thelogin);
    }

    public function getThename()
    {
        return html_entity_decode($this->thename);
    }

}
