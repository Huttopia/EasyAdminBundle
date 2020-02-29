<?php

namespace EasyCorp\Bundle\EasyAdminBundle\Contracts\Controller;

use EasyCorp\Bundle\EasyAdminBundle\Configuration\AssetConfig;
use EasyCorp\Bundle\EasyAdminBundle\Configuration\CrudConfig;
use EasyCorp\Bundle\EasyAdminBundle\Configuration\DashboardConfig;
use EasyCorp\Bundle\EasyAdminBundle\Configuration\DetailPageConfig;
use EasyCorp\Bundle\EasyAdminBundle\Configuration\FormPageConfig;
use EasyCorp\Bundle\EasyAdminBundle\Configuration\IndexPageConfig;
use EasyCorp\Bundle\EasyAdminBundle\Configuration\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Configuration\UserMenuConfig;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * This must be implemented by all backend dashboards.
 *
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
interface DashboardControllerInterface
{
    public function configureDashboard(): DashboardConfig;

    public function configureCrud(): CrudConfig;

    public function configureAssets(): AssetConfig;

    public function configureUserMenu(UserInterface $user): UserMenuConfig;

    /**
     * @return MenuItem[]
     */
    public function configureMenuItems(): iterable;
}
