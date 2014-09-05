<?php
$ttTheme		=	count( get_themes() );
$ttModule		=	count( get_modules( 'all' ) );
$ttPages		=	$this->tendoo_admin->countPages();
$ttPrivileges	=	$this->tendoo_admin->countPrivileges();
$appIconApi		=	$this->tendoo_admin->getAppIcon();
$countUsers		=	count($this->users_global->getAdmin());
?>
<section class="panel">
    <header class="panel-heading <?php echo theme_class();?>">Statistiques</header>
    <ul class="list-group no-radius m-b-none m-t-n-xxs list-group-lg no-border">
        <li class="list-group-item">Modules install&eacute;s <span class="badge <?php echo theme_class();?>"><?php echo $ttModule;?></span></li>
        <li class="list-group-item">Th&egrave;mes install&eacute;s <span class="badge <?php echo theme_class();?>"><?php echo $ttTheme;?></span></li>
        <li class="list-group-item">Pages cr&eacute&eacute;es <span class="badge <?php echo theme_class();?>"><?php echo $ttPages;?></span></li>
        <li class="list-group-item">Privil&egrave;ges cr&eacute;es <span class="badge <?php echo theme_class();?>"><?php echo $ttPrivileges;?></span></li>
        <li class="list-group-item">Utilisateurs <span class="badge <?php echo theme_class();?>"><?php echo $countUsers;?></span></li>
    </ul>
</section>