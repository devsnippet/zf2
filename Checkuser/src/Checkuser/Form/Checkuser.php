<?php
//
namespace Checkuser\Form;

use Zend\Form\Annotation;
/**
 * @Annotation\Hydrator("Zend\Stdlib\Hydrator\ObjectProperty")
 * @Annotation\Name("Checkuser")
 */

class Checkuser{
    /**
     * @Annotation\Type("Zend\Form\Element\Text")
     * @Annotation\Required({"required":"true" })
     * @Annotation\Filter({"name":"StripTags"})
     * @Annotation\Options({"label":"Логин абонента:"})
     */
    public $login;

    /**
     * @Annotation\Type("Zend\Form\Element\Text")
     * @Annotation\Filter({"name":"StripTags"})
     * @Annotation\Options({"label":"Статус абонента:"})
     */
    public $status;



    /**
     * @Annotation\Type("Zend\Form\Element\Submit")
     * @Annotation\Attributes({"value":"Проверить"})
     * @Annotation\Attributes({"class":"btn"})
     */
    public $submit;
}