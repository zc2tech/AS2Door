<?php

namespace App\Entity;

use App\Repository\PartnerRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PartnerRepository::class)]
class Partner
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $as2_ident = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $partner_name = null;

    #[ORM\Column]
    private ?bool $is_local = null;

    #[ORM\Column(nullable: true)]
    private ?int $sign = null;

    #[ORM\Column(nullable: true)]
    private ?int $encrypt = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $email = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $url = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $mdn_url = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $msg_subject = null;

    #[ORM\Column(length: 1024, nullable: true)]
    private ?string $poll_ignore_list = null;

    #[ORM\Column(nullable: true)]
    private ?int $poll_interval = null;

    #[ORM\Column(nullable: true)]
    private ?int $msg_compression = null;

    #[ORM\Column]
    private ?bool $signed_mdn = null;

    #[ORM\Column]
    private ?bool $use_http_auth = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $http_auth_user = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $http_auth_pass = null;

    #[ORM\Column]
    private ?bool $use_http_auth_async_mdn = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $http_auth_user_async_mdn = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $http_auth_pass_async_mdn = null;

    #[ORM\Column]
    private ?bool $keep_original_filename_on_receipt = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $partner_comment = null;

    #[ORM\Column(nullable: true)]
    private ?int $content_transfer_encoding = null;

    #[ORM\Column(length: 3)]
    private ?string $http_version = null;

    #[ORM\Column]
    private ?bool $is_as2 = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAs2Ident(): ?string
    {
        return $this->as2_ident;
    }

    public function setAs2Ident(?string $as2_ident): static
    {
        $this->as2_ident = $as2_ident;

        return $this;
    }

    public function getPartnerName(): ?string
    {
        return $this->partner_name;
    }

    public function setPartnerName(?string $partner_name): static
    {
        $this->partner_name = $partner_name;

        return $this;
    }

    public function isLocal(): ?bool
    {
        return $this->is_local;
    }

    public function setIsLocal(bool $is_local): static
    {
        $this->is_local = $is_local;

        return $this;
    }

    public function getSign(): ?int
    {
        return $this->sign;
    }

    public function setSign(?int $sign): static
    {
        $this->sign = $sign;

        return $this;
    }

    public function getEncrypt(): ?int
    {
        return $this->encrypt;
    }

    public function setEncrypt(?int $encrypt): static
    {
        $this->encrypt = $encrypt;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): static
    {
        $this->email = $email;

        return $this;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(?string $url): static
    {
        $this->url = $url;

        return $this;
    }

    public function getMdnUrl(): ?string
    {
        return $this->mdn_url;
    }

    public function setMdnUrl(?string $mdn_url): static
    {
        $this->mdn_url = $mdn_url;

        return $this;
    }

    public function getMsgSubject(): ?string
    {
        return $this->msg_subject;
    }

    public function setMsgSubject(?string $msg_subject): static
    {
        $this->msg_subject = $msg_subject;

        return $this;
    }

    public function getPollIgnoreList(): ?string
    {
        return $this->poll_ignore_list;
    }

    public function setPollIgnoreList(?string $poll_ignore_list): static
    {
        $this->poll_ignore_list = $poll_ignore_list;

        return $this;
    }

    public function getPollInterval(): ?int
    {
        return $this->poll_interval;
    }

    public function setPollInterval(?int $poll_interval): static
    {
        $this->poll_interval = $poll_interval;

        return $this;
    }

    public function getMsgCompression(): ?int
    {
        return $this->msg_compression;
    }

    public function setMsgCompression(?int $msg_compression): static
    {
        $this->msg_compression = $msg_compression;

        return $this;
    }

    public function isSignedMdn(): ?bool
    {
        return $this->signed_mdn;
    }

    public function setSignedMdn(bool $signed_mdn): static
    {
        $this->signed_mdn = $signed_mdn;

        return $this;
    }

    public function isUseHttpAuth(): ?bool
    {
        return $this->use_http_auth;
    }

    public function setUseHttpAuth(bool $use_http_auth): static
    {
        $this->use_http_auth = $use_http_auth;

        return $this;
    }

    public function getHttpAuthUser(): ?string
    {
        return $this->http_auth_user;
    }

    public function setHttpAuthUser(?string $http_auth_user): static
    {
        $this->http_auth_user = $http_auth_user;

        return $this;
    }

    public function getHttpAuthPass(): ?string
    {
        return $this->http_auth_pass;
    }

    public function setHttpAuthPass(?string $http_auth_pass): static
    {
        $this->http_auth_pass = $http_auth_pass;

        return $this;
    }

    public function isUseHttpAuthAsyncMdn(): ?bool
    {
        return $this->use_http_auth_async_mdn;
    }

    public function setUseHttpAuthAsyncMdn(bool $use_http_auth_async_mdn): static
    {
        $this->use_http_auth_async_mdn = $use_http_auth_async_mdn;

        return $this;
    }

    public function getHttpAuthUserAsyncMdn(): ?string
    {
        return $this->http_auth_user_async_mdn;
    }

    public function setHttpAuthUserAsyncMdn(?string $http_auth_user_async_mdn): static
    {
        $this->http_auth_user_async_mdn = $http_auth_user_async_mdn;

        return $this;
    }

    public function getHttpAuthPassAsyncMdn(): ?string
    {
        return $this->http_auth_pass_async_mdn;
    }

    public function setHttpAuthPassAsyncMdn(?string $http_auth_pass_async_mdn): static
    {
        $this->http_auth_pass_async_mdn = $http_auth_pass_async_mdn;

        return $this;
    }

    public function isKeepOriginalFilenameOnReceipt(): ?bool
    {
        return $this->keep_original_filename_on_receipt;
    }

    public function setKeepOriginalFilenameOnReceipt(bool $keep_original_filename_on_receipt): static
    {
        $this->keep_original_filename_on_receipt = $keep_original_filename_on_receipt;

        return $this;
    }

    public function getPartnerComment(): ?string
    {
        return $this->partner_comment;
    }

    public function setPartnerComment(?string $partner_comment): static
    {
        $this->partner_comment = $partner_comment;

        return $this;
    }

    public function getContentTransferEncoding(): ?int
    {
        return $this->content_transfer_encoding;
    }

    public function setContentTransferEncoding(?int $content_transfer_encoding): static
    {
        $this->content_transfer_encoding = $content_transfer_encoding;

        return $this;
    }

    public function getHttpVersion(): ?string
    {
        return $this->http_version;
    }

    public function setHttpVersion(string $http_version): static
    {
        $this->http_version = $http_version;

        return $this;
    }

    public function isAs2(): ?bool
    {
        return $this->is_as2;
    }

    public function setIsAs2(bool $is_as2): static
    {
        $this->is_as2 = $is_as2;

        return $this;
    }
}
