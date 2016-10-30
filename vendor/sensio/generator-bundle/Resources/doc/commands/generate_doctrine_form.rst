Generating a New Form Type Class Based on a Doctrine Entity
===========================================================

.. caution::

<<<<<<< HEAD
    If your application is based on Symfony 2.x version, replace ``php bin/console``
    with ``php app/console`` before executing any of the console commands included
=======
    If your application is based on Symfony 3, replace ``php app/console`` by
    ``php bin/console`` before executing any of the console commands included
>>>>>>> master
    in this article.

Usage
-----

The ``generate:doctrine:form`` command generates a basic form type class
by using the metadata mapping of a given entity class:

.. code-block:: bash

<<<<<<< HEAD
    $ php bin/console generate:doctrine:form AcmeBlogBundle:Post
=======
    $ php app/console generate:doctrine:form AcmeBlogBundle:Post
>>>>>>> master

Required Arguments
------------------

``entity``

    The entity name given in shortcut notation containing the bundle name
    in which the entity is located and the name of the entity (``AcmeBlogBundle:Post``,
    for example):

    .. code-block:: bash

<<<<<<< HEAD
        $ php bin/console generate:doctrine:form AcmeBlogBundle:Post
=======
        $ php app/console generate:doctrine:form AcmeBlogBundle:Post
>>>>>>> master
