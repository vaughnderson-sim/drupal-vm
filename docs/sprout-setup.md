Sprout Online Virtual Machine Setup
===================================

Install Prerequisites
------------------------------

  * Install Virtualbox and Vagrant
    * https://www.virtualbox.org/wiki/Downloads
    * https://www.vagrantup.com/downloads.html
  * Install vagrant hostmanager plugin
    `vagrant plugin install vagrant-hostmanager`
  
Obtain the source code
----------------------

```bash
git checkout --track origin/sproutonline
git submodule update --init

ln sprout.config.yml config.yml
```

Build the virtual machine
-------------------------

```bash
vagrant up
```

Post-installation tasks
-----------------------


