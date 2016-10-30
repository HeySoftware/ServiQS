``empty``
=========

<<<<<<< HEAD
``empty`` checks if a variable is an empty string, an empty array, an empty
hash, exactly ``false``, or exactly ``null``:

.. code-block:: jinja

=======
``empty`` checks if a variable is empty:

.. code-block:: jinja

    {# evaluates to true if the foo variable is null, false, an empty array, or the empty string #}
>>>>>>> master
    {% if foo is empty %}
        ...
    {% endif %}
