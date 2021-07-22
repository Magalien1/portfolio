<?php

namespace App\Controller\Admin;

use App\Entity\CategoryProject;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class CategoryProjectCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return CategoryProject::class;
    }

    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
}
