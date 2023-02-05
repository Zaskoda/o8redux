<?php

return [
  "deployments" =>  [
    //Binance Test
    "97" => [
        'chainId'=> '97',
        'hexId'=> '0x61',
        'name'=> 'Binance Smartchain Testnet',
        'shortName'=> 'Binance',
        'description'=> '',
        'currency'=> [
          'name' => 'Binance Coin',
          'symbol' => 'BNB',
          'decimals' => 18
        ],
        'rpc' => 'https://data-seed-prebsc-1-s1.binance.org:8545/',
        'explorer' => 'https://testnet.bscscan.com',
    ],
    //Moonriver Alpha
    "1285" => [
        'chainId' => '1285',
        'hexId' => '0x505',
        'name' => 'Moonriver Alpha',
        'shortName' => 'Moonriver',
        'description' => '',
        'currency' => [
          'name' => 'MOVR',
          'symbol' => 'MOVR',
          'decimals' => 18,
        ],
        'rpc' => 'https://rpc.api.moonriver.moonbeam.network',
        'explorer' => 'https://moonriver.moonscan.io',
    ],
    //Moonbase Alpha
    "1287" => [
        'chainId' => '1287',
        'hexId' => '0x507',
        'name' => 'Moonbase Alpha',
        'shortName' => 'Moonbase',
        'description' => '',
        'currency' => [
          'name' => 'DEV MOVR',
          'symbol' => 'DEV',
          'decimals' => 18,
        ],
        'rpc' => 'https://rpc.api.moonbase.moonbeam.network',
        'explorer' => 'https://moonbase.moonscan.io',
    ],
    //Bobabase
    "1297" => [
        'chainId' => '1297',
        'hexId' => '0x511',
        'name' => 'Bobabase Test Network',
        'shortName' => 'Bobabase',
        'description' => '',
        'currency' => [
          'name' => 'GLMRDEV',
          'symbol' => 'DEV',
          'decimals' => 18,
        ],
        'rpc' =>'https://bobabase.boba.network',
        'explorer' => 'https://blockexplorer.bobabase.boba.network',
    ],
    //Mumbai
    "80001" => [
        'chainId' => '80001',
        'hexId' => '0x13881',
        'name' => 'Polygon Mumbai Testnet',
        'shortName' => 'Mumbai',
        'description' => 'Proof-of-Stake',
        'currency' => [
          'name' => 'MATIC',
          'symbol' => 'MATIC',
          'decimals' => 18,
        ],
        'rpc' =>'https://rpc-mumbai.maticvigil.com/',
        'explorer' => 'https://mumbai.polygonscan.com',
    ],
    //Sepolia Testnet
    "11155111" => [
        'chainId' => '421611',
        'hexId' => '0xAA36A7',
        'name' => 'Sepolia Testnet',
        'shortName' => 'Sepolia',
        'description' => 'Official Ethereum test network',
        'currency' => [
          'name' => 'Arbitrum Ether',
          'symbol' => 'ETH',
          'decimals' => 18,
        ],
        'rpc' =>'https://rpc.sepolia.org/',
        'explorer' => 'https://sepolia.etherscan.io/',
    ],
  ],
];
