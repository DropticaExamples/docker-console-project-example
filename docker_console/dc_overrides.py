
# # import classes to override
from docker_console.web.engines.drupal7.builder import Builder

class BuilderLocal:
    def enable_mailcatcher(self):
        self.drush.en("mailsystem")
        self.drush.en("smtp")
        self.drush.run("vset -y 'smtp_host' 'mailcatcher'")
        self.drush.run("vset -y 'smtp_on' 1")
        self.drush.run("vset -y 'smtp_protocol' 'standard'")
        self.drush.run("vset -y 'smtp_port' 1025")
        self.drush.run("vdel -y 'smtp_username'")
        self.drush.run("vdel -y 'smtp_password'")

Builder.__bases__ += (BuilderLocal,)

commands_overrides = {
 
    'build-in-docker': [
        'drupal_settings.copy_settings("drupal7")',
        'archive.unpack_files(True)',
       
        'database.drop_db',
        'database.create_db',
        'database.import_db',
        'enable_mailcatcher',
        'drush.updb',

        'drush.uli'
    ]
}
