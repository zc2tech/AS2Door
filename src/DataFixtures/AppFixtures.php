<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Partner;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $partner = new Partner;
        $partner->setAs2Ident('AS2Door');
        $partner->setPartnerName('AS2Door Name');
        $partner->setIsLocal(true);
        $partner->setUrl('http://localhost/as2-door/receive');
        $partner->setMdnUrl('http://localhost/as2-door/receive');
        $partner->setSignedMdn(false);
        $partner->setUseHttpAuth(true);
        $partner->setUseHttpAuthAsyncMdn(false);
        $partner->setKeepOriginalFilenameOnReceipt(true);
        $partner->setHttpVersion('1.1');
        $partner->setIsAs2(true);
        $manager->persist($partner);

        $partner = new Partner;
        $partner->setAs2Ident('testacig.ariba.juilian.com');
        $partner->setPartnerName('testacig.ariba.juilian.com Name');
        $partner->setIsLocal(false);
        $partner->setUrl('http://localhost:8080/as2/HttpReceiver');
        $partner->setMdnUrl('http://localhost:8080/as2/HttpReceiver');
        $partner->setSignedMdn(false);
        $partner->setUseHttpAuth(true);
        $partner->setUseHttpAuthAsyncMdn(false);
        $partner->setKeepOriginalFilenameOnReceipt(true);
        $partner->setHttpVersion('1.1');        
        $partner->setIsAs2(true);
        $manager->persist($partner);

        $manager->flush();
    }
}
