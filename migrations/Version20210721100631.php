<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210721100631 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE article_category_article (article_id INT NOT NULL, category_article_id INT NOT NULL, INDEX IDX_D2B6356B7294869C (article_id), INDEX IDX_D2B6356B548AD6E2 (category_article_id), PRIMARY KEY(article_id, category_article_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE category_article (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE article_category_article ADD CONSTRAINT FK_D2B6356B7294869C FOREIGN KEY (article_id) REFERENCES article (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE article_category_article ADD CONSTRAINT FK_D2B6356B548AD6E2 FOREIGN KEY (category_article_id) REFERENCES category_article (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE article_category_article DROP FOREIGN KEY FK_D2B6356B548AD6E2');
        $this->addSql('DROP TABLE article_category_article');
        $this->addSql('DROP TABLE category_article');
    }
}
