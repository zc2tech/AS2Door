<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250331150654 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            CREATE TABLE partner (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, as2_ident VARCHAR(255) DEFAULT NULL, partner_name VARCHAR(255) DEFAULT NULL, is_local BOOLEAN NOT NULL, sign INTEGER DEFAULT NULL, encrypt INTEGER DEFAULT NULL, email VARCHAR(255) DEFAULT NULL, url VARCHAR(255) DEFAULT NULL, mdn_url VARCHAR(255) DEFAULT NULL, msg_subject VARCHAR(255) DEFAULT NULL, poll_ignore_list VARCHAR(1024) DEFAULT NULL, poll_interval INTEGER DEFAULT NULL, msg_compression INTEGER DEFAULT NULL, signed_mdn BOOLEAN NOT NULL, use_http_auth BOOLEAN NOT NULL, http_auth_user VARCHAR(255) DEFAULT NULL, http_auth_pass VARCHAR(255) DEFAULT NULL, use_http_auth_async_mdn BOOLEAN NOT NULL, http_auth_user_async_mdn VARCHAR(255) DEFAULT NULL, http_auth_pass_async_mdn VARCHAR(255) DEFAULT NULL, keep_original_filename_on_receipt BOOLEAN NOT NULL, partner_comment CLOB DEFAULT NULL, content_transfer_encoding INTEGER DEFAULT NULL, http_version VARCHAR(3) NOT NULL)
        SQL);
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            DROP TABLE partner
        SQL);
    }
}
