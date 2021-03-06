<?php

namespace AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RegistrationType extends AbstractType {
	
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$builder
		->add('name')
		->add('surnames')
		->add('photo1File', 'file')
		->add('photo2File', 'file')
		->add('photo3File', 'file')
		->add('photo4File', 'file')
		->add('save', SubmitType::class)
		;
	}
	
	public function configureOptions(OptionsResolver $resolver)
	{
		$resolver->setDefaults(array(
				'data_class' => 'AppBundle\Entity\Registration'
		));
	}
}