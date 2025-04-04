<?php

namespace App\Form;

use App\Entity\Partner;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PartnerType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('as2_ident')
            ->add('partner_name')
            ->add('is_local')
            ->add('sign')
            ->add('encrypt')
            ->add('email')
            ->add('url')
            ->add('mdn_url')
            ->add('msg_subject')
            ->add('poll_ignore_list')
            ->add('poll_interval')
            ->add('msg_compression')
            ->add('signed_mdn')
            ->add('use_http_auth')
            ->add('http_auth_user')
            ->add('http_auth_pass')
            ->add('use_http_auth_async_mdn')
            ->add('http_auth_user_async_mdn')
            ->add('http_auth_pass_async_mdn')
            ->add('keep_original_filename_on_receipt')
            ->add('partner_comment')
            ->add('content_transfer_encoding')
            ->add('http_version')
            ->add('is_as2')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Partner::class,
        ]);
    }
}
