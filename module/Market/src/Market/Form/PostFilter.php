<?php
/**
 * Created by PhpStorm.
 * User: Welton
 * Date: 16/10/2015
 * Time: 08:14
 */

namespace Market\Form;


use Zend\InputFilter\Input;
use Zend\InputFilter\InputFilter;
use Zend\Validator\Regex;

class PostFilter extends InputFilter
{
    private $categories;

    public function setCategories($categories){
        $this->categories = $categories;
    }

    public function buildFilter(){

        $category = new Input('category');
        $category->getFilterChain()
            ->attachByName('StringTrim')
            ->attachByName('StripTags')
            ->attachByName('StringToLower')
        ;

        $category->getValidatorChain()
            ->attachByName('InArray', array('haystack' => $this->categories))
        ;

        $title = new Input('title');
        $title->getFilterChain()
            ->attachByName('StringTrim')
            ->attachByName('StripTags')
        ;
        $titleRegex = new Regex(array('pattern' => '/^[a-zA-Z0-9 ]*$/'));
        $titleRegex->setMessage('Title should only contain number, letters or spaces!');
        $title->getValidatorChain()
            ->attach($titleRegex)
            ->attachByName('StringLength', array('min'=>1, 'max'=>128))
        ;


        $priceRegex = new Regex(array('pattern' => '/^[0-9 ]*$/'));
        $price = new Input('price');
        $price->getValidatorChain()
            ->attach($priceRegex)
        ;
        $description = new Input('description');
        $description->getValidatorChain()
            ->attachByName('StringLength', array('min'=>1, 'max'=>128))
        ;
        $photoRegex = new Regex(array('pattern' => '/(http:\/\/[\w\.\/-]+)/'));
        $photo_filename = new Input('photo_filename');
        $photo_filename->getValidatorChain()
            ->attach($photoRegex)
        ;
        $phoneRegex = new Regex(array('pattern' => '/^[0-9 ]*$/'));
        $contact_phone = new Input('contact_phone');
        $contact_phone->getValidatorChain()
            ->attach($phoneRegex)
        ;
        $cityCode = new Input('cityCode');
        $cityCode->getValidatorChain()
            ->attachByName('InArray', array('haystack' => array('Salvador, Brasil','Rio de Janeiro, Brasil', 'São Paulo, Brasil')))
        ;
        $date_expires = new Input('date_expires');
        $date_expires->getValidatorChain()
            ->attachByName('InArray', array('haystack' => array('1','2', '3','4','5')))
        ;
        $contact_email = new Input('contact_email');


        $contactRegex = new Regex(array('pattern' => '/^[a-zA-Z0-9 ]*$/'));
        $contact_name = new Input('contact_name');
        $contact_name->getValidatorChain()
            ->attach($contactRegex)
        ;

        $codeRegex = new Regex(array('pattern' => '/^[0-9 ]*$/'));
        $delete_code = new Input('delete_code');
        $delete_code->getValidatorChain()
            ->attach($phoneRegex)
        ;


        $this->add($category)
            ->add($title)
            ->add($price)
            ->add($date_expires)
            ->add($description)
            ->add($photo_filename)
            ->add($contact_name)
            ->add($contact_email)
            ->add($contact_phone)
            ->add($cityCode)
            ->add($delete_code)
        ;

    }

} 