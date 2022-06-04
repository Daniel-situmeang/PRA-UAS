<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Validation\CreditCardRules;
use CodeIgniter\Validation\FileRules;
use CodeIgniter\Validation\FormatRules;
use CodeIgniter\Validation\Rules;

class Validation extends BaseConfig
{
    //--------------------------------------------------------------------
    // Setup
    //--------------------------------------------------------------------

    /**
     * Stores the classes that contain the
     * rules that are available.
     *
     * @var string[]
     */
    public $ruleSets = [
        Rules::class,
        FormatRules::class,
        FileRules::class,
        CreditCardRules::class,
    ];

    /**
     * Specifies the views that are used to display the
     * errors.
     *
     * @var array<string, string>
     */
    public $templates = [
        'list'   => 'CodeIgniter\Validation\Views\list',
        'single' => 'CodeIgniter\Validation\Views\single',
    ];

    //--------------------------------------------------------------------
    // Rules
    //--------------------------------------------------------------------
    public $tambahdivisi = 
    [
        'divisi' => [
            'label' => 'Divisi',
            'rules' => 'required|is_unique[himatif.divisi]',
            'errors' => [
                'required' => '{field} harus diisi.',
                'is_unique' => '{field} sudah ada.',
            ],
        ],
        'jumlah_anggota' => [
            'label' => 'Jumlah Anggota',
            'rules' => 'required|numeric|is_natural_no_zero',
            'errors' => [
                'required' => '{field} harus diisi.',
                'numeric' => '{field} harus berupa angka.',
            ],
        ],
        'keterangan_divisi' => [
            'label' => 'Keterangan Divisi',
            'rules' => 'required',
            'errors' => [
                'required' => '{field} harus diisi.',
            ],
        ],
        'progja_unggulan' => [
            'label' => 'Progja Unggulan',
            'rules' => 'required',
            'errors' => [
                'required' => '{field} harus diisi.',
            ],
        ],
    ];

    public $update_divisi = 
    [
        'divisi' => [
            'label' => 'Divisi',
            'rules' => 'required|is_unique[himatif.divisi]',
            'errors' => [
                'required' => '{field} harus diisi.',
                'is_unique' => '{field} sudah ada.',
            ],
        ],
        'jumlah_anggota' => [
            'label' => 'Jumlah Anggota',
            'rules' => 'required|numeric|is_natural_no_zero',
            'errors' => [
                'required' => '{field} harus diisi.',
                'numeric' => '{field} harus berupa angka.',
            ],
        ],
        'keterangan_divisi' => [
            'label' => 'Keterangan Divisi',
            'rules' => 'required',
            'errors' => [
                'required' => '{field} harus diisi.',
            ],
        ],
        'progja_unggulan' => [
            'label' => 'Progja Unggulan',
            'rules' => 'required',
            'errors' => [
                'required' => '{field} harus diisi.',
            ],
        ],
    ];
};

