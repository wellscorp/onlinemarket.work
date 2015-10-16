<?php
/**
 * Created by PhpStorm.
 * User: Welton
 * Date: 16/10/2015
 * Time: 07:45
 */

namespace Market\Form;


use Zend\Form\Element;
use Zend\Form\Form;

class PostForm extends Form{

    private $categories;

    /**
     * @return mixed
     */
    public function getCategories()
    {
        return $this->categories;
    }

    /**
     * @param mixed $categories
     */
    public function setCategories($categories)
    {
        $this->categories = $categories;
    }



    public function buildForm(){

        $this->setAttribute('method','POST');

        $category = new Element\Select('category');
        $category->setLabel('Category')
            ->setValueOptions(
                array_combine($this->categories, $this->categories)
            )
        ;

        $title = new Element\Text('title');
        $title->setLabel('Title')
            ->setAttributes(array(
                'size' => 22,
                'maxlength' => 128
            ))
        ;



        $submit = new Element\Submit('submit');
        $submit->setValue('Post')//->setAttribute('value' => 'Post')
        ;

        $this->add($category)
            ->add($title)
            ->add($submit)
        ;

    }
} 