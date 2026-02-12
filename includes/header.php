<?php
session_start();
?>
<!DOCTYPE html>
<html class="dark" lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport"/>
    <title>FreshGo Driver</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="/assets/css/style.css">
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#f47b25",
                        "primary-light": "#ff9d5c",
                        "background-light": "#f8f7f5",
                        "background-dark": "#140f0c",
                        "surface-dark": "#1d1511", 
                        "surface-dark-lighter": "#2a1f1a",
                    },
                    fontFamily: {
                        "display": ["Work Sans", "sans-serif"]
                    },
                    borderRadius: {"DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "2xl": "1rem", "3xl": "1.5rem", "full": "9999px"},
                },
            },
        }
    </script>
    <style>
        body {
            background-color: #140f0c;
            color: #ffffff;
            font-family: 'Work Sans', sans-serif;
            overflow-x: hidden;
            -webkit-tap-highlight-color: transparent;
        }
    </style>
</head>
<body class="bg-background-dark text-white min-h-screen">
