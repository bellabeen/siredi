# -*- coding: utf-8 -*-
{
    'name': "Training Odoo NEW",

    'summary': """ Modul untuk latihan technical Odoo """,

    'description': """
        Modul ini berfungsi untuk menjalankan technical documentation pada website resmi odoo.com. Bahan yang dipelajari adalah :
        - ORM
        - Berbagai View
        - Report
        - Wizard
        - Dll
    """,

    'author': "Muhammad Bella Buay Nunyai",
    'website': "http://www.bellabeen.com",

    # Categories can be used to filter modules in modules listing
    # Check https://github.com/odoo/odoo/blob/14.0/odoo/addons/base/data/ir_module_category_data.xml
    # for the full list
    'category': 'Uncategorized',
    'version': '0.1',

    # any module necessary for this one to work correctly
    'depends': ['base', 'stock'],

    # always loaded
    'data': [
        # 'security/ir.model.access.csv',
        'views/views.xml',
        'views/templates.xml',
    ],
    # only loaded in demonstration mode
    'demo': [
        # 'demo/demo.xml', -> uncomment if use demo data
    ],
    
    'application': True,
}