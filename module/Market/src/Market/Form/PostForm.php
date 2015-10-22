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

        $price = new Element\Number('price');
        $price->setLabel('price');
        $data_expires = new Element\Radio('data_expires');
        $data_expires->setLabel('data_expires');
        $description = new Element\Textarea('description');
        $description->setLabel('description');
        $photo_filername = new Element\Url('photo_filername');
        $photo_filername->setLabel('photo_filername');
        $contact_name = new Element\Text('contact_name');
        $contact_name->setLabel('contact_name');
        $contact_email = new Element\Email('contact_email');
        $contact_email->setLabel('contact_email');
        $contact_phone = new Element\Text('contact_phone');
        $contact_phone->setLabel('contact_phone');
        $cityCode = new Element\Select('cityCode');
        $cityCode->setLabel('cityCode');

        $delete_code = new Element\Number('delete_code');
        $delete_code->setLabel('delete_code');
        $captcha = new Element\Captcha('captcha');
        $captcha->setLabel('captcha');



        $submit = new Element\Submit('submit');
        $submit->setValue('Post')//->setAttribute('value' => 'Post')
        ;

        $this->add($category)
            ->add($title)
            ->add($submit)
        ;

    }
} 