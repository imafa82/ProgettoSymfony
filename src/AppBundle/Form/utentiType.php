<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class utentiType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('codiceUte')->add('cognome')->add('nome')->add('mail')->add('tel')->add('fax')->add('cell')->add('indirizzo')->add('citta')->add('idreg')->add('idpro')->add('prov')->add('idplace')->add('place')->add('login')->add('pwd')->add('idOsp')->add('profilo')->add('status')->add('dataAttivazione')->add('dataAgg')->add('idUteAgg')->add('userSex')->add('userBirthRegId')->add('userBirthProvId')->add('userBirthProv')->add('userBirthPlaceId')->add('userBirthPlace')->add('userBirthDay')->add('userCFType')->add('userCodFisc')->add('userSTPExpDate')->add('userCittadinanza')->add('userStatoCivile')->add('userAccompagnatore')->add('userStudio')->add('userLavoro')->add('userMediatore')->add('userASLid')->add('userMedico')->add('userGruppo')->add('userRh')->add('userRosolia')->add('userMorbillo')->add('userVaricella')->add('userHBV')->add('userHCV')->add('userHIV')->add('userLue')->add('userCMV')->add('userToxo')->add('dataCreazione')->add('dateSendCredential')->add('hasRelatives')->add('welfareWorker')        ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\utenti'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_utenti';
    }


}
