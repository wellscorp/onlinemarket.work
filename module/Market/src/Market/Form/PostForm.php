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
        $price->setLabel('Price');
        $data_expires = new Element\Radio('data_expires');
        $data_expires->setLabel('Data Expires')
            ->setValueOptions(array('1','2','3','4','5'))
        ;
        $description = new Element\Textarea('description');
        $description->setLabel('Description');
        $photo_filername = new Element\Url('photo_filername');
        $photo_filername->setLabel('Photo');
        $contact_name = new Element\Text('contact_name');
        $contact_name->setLabel('Contact Name');
        $contact_email = new Element\Email('contact_email');
        $contact_email->setLabel('Contact Email');
        $contact_phone = new Element\Text('contact_phone');
        $contact_phone->setLabel('Contact Phone');
        $cityCode = new Element\Radio('cityCode');
        $cityCode->setLabel('City')
            ->setValueOptions(array('Salvador','Rio de Janeiro', 'São Paulo'))
        ;

        $delete_code = new Element\Number('delete_code');
        $delete_code->setLabel('Delete Code');
        $captcha = new Element\Captcha('captcha');
        $captcha->setLabel('Captcha');



        $submit = new Element\Submit('submit');
        $submit->setValue('Post')//->setAttribute('value' => 'Post')
        ;

        $this->add($category)
            ->add($title)
            ->add($price)
            ->add($data_expires)
            ->add($description)
            ->add($photo_filername)
            ->add($contact_name)
            ->add($contact_email)
            ->add($contact_phone)
            ->add($cityCode)
            ->add($delete_code)
            ->add($submit)
        ;

    }
} 