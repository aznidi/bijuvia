<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bijuvia - Montres & Bijoux</title>

    <!-- Lien vers la police Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    
    <!-- Lien vers le fichier Tailwind CSS -->
    <link href="../public/assets/css/tailwind.css" rel="stylesheet">
    <link href="../public/assets/css/custom.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Lien vers les icônes FontAwesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    
    <style>
        /* Appliquer la police Poppins à tout le corps */
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-100">
    <?php
        include __DIR__ . '/../includes/header.php';
    ?>
    <main class="mt-9">
        <!-- Section Hero -->
        <section class="relative bg-white overflow-hidden">
            <div class="container mx-auto flex flex-col-reverse md:flex-row items-center justify-between py-10">
                <!-- Texte -->
                <div class="w-full md:w-1/2 text-center md:text-left">
                    <h1 class="text-4xl md:text-6xl font-bold text-gray-800 leading-tight mb-6">
                        Bijoux & Montres <br>
                        <span class="text-yellow-500">Élégance intemporelle</span>
                    </h1>
                    <p class="text-lg text-gray-600 mb-8">
                        Découvrez notre collection exclusive de bijoux et montres conçus pour sublimer votre style. 
                        Des designs modernes et intemporels à portée de main.
                    </p>
                    <div class="flex justify-center md:justify-start space-x-4">
                        <a href="product.php" class="px-6 py-3 bg-yellow-500 text-white font-medium text-lg rounded-md shadow-md hover:bg-yellow-600 transition duration-300 ease-in-out">
                            Explorer
                        </a>
                        <a href="#about" class="px-6 py-3 border border-yellow-500 text-yellow-500 font-medium text-lg rounded-md shadow-md hover:bg-yellow-100 transition duration-300 ease-in-out">
                            En savoir plus
                        </a>
                    </div>
                </div>

                <!-- Image -->
                <div class="w-full md:w-1/2 flex justify-center">
                    <img src="../public/assets/images/hero.png" alt="Bijoux Placeholder" class="">
                </div>
            </div>
        </section>

        <!-- Section Avantages -->
        <section class="py-10 bg-gray-50">
            <div class="container mx-auto text-center">
                <h2 class="text-3xl font-bold text-gray-800 mb-6">Pourquoi choisir Bijuvia ?</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="flex flex-col items-center">
                        <i class="fas fa-gem text-yellow-500 text-5xl mb-4"></i>
                        <h3 class="text-xl font-semibold text-gray-700 mb-2">Qualité Supérieure</h3>
                        <p class="text-gray-600">Des matériaux haut de gamme pour des bijoux qui durent toute une vie.</p>
                    </div>
                    <div class="flex flex-col items-center">
                        <i class="fas fa-shipping-fast text-yellow-500 text-5xl mb-4"></i>
                        <h3 class="text-xl font-semibold text-gray-700 mb-2">Livraison Rapide</h3>
                        <p class="text-gray-600">Recevez vos commandes rapidement avec un suivi assuré.</p>
                    </div>
                    <div class="flex flex-col items-center">
                        <i class="fas fa-hand-holding-heart text-yellow-500 text-5xl mb-4"></i>
                        <h3 class="text-xl font-semibold text-gray-700 mb-2">Service Client</h3>
                        <p class="text-gray-600">Un support dédié pour répondre à toutes vos questions.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section Appel à l'action -->
        <section class="py-10 bg-yellow-500">
            <div class="container mx-auto text-center text-white">
                <h2 class="text-3xl font-bold mb-6">Rejoignez notre communauté</h2>
                <p class="text-lg mb-8">Inscrivez-vous maintenant pour bénéficier de nos offres exclusives et découvrir nos nouvelles collections.</p>
                <a href="register.php" class="px-8 py-4 bg-white text-yellow-500 font-medium text-lg rounded-md shadow-md hover:bg-yellow-100 transition duration-300 ease-in-out">
                    Inscription Gratuite
                </a>
            </div>
        </section>

        <!-- Section Produits célèbres -->
        <section class="py-10 bg-gray-50" id="tendances">
            <div class="container mx-auto">
                <h2 class="text-3xl font-bold text-gray-800 text-center mb-8">Produits Célèbres</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
                    <!-- Produit 1 -->
                    <div class="bg-white shadow-md rounded-md overflow-hidden">
                        <img src="../public/assets/images/produit1.jpg" alt="Produit 1" class="w-full h-48 object-cover">
                        <div class="p-4">
                            <h3 class="text-lg font-semibold text-gray-800 mb-2">Montre Élégante</h3>
                            <p class="text-gray-600 mb-4">Une montre moderne avec un design intemporel.</p>
                            <p class="text-yellow-500 font-bold text-xl mb-4">799.99 MAD</p>
                            <div class="flex justify-between items-center">
                                <a href="details.php?product=1" class="text-yellow-500 hover:text-yellow-600 font-medium text-sm">Voir détails</a>
                                <button class="px-4 py-2 bg-yellow-500 text-white text-sm font-medium rounded-md shadow-md hover:bg-yellow-600 transition duration-300">
                                    Ajouter au panier
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Produit 2 -->
                    <div class="bg-white shadow-md rounded-md overflow-hidden">
                        <img src="../public/assets/images/produit2.jpg" alt="Produit 2" class="w-full h-48 object-cover">
                        <div class="p-4">
                            <h3 class="text-lg font-semibold text-gray-800 mb-2">Collier en Or</h3>
                            <p class="text-gray-600 mb-4">Un collier élégant pour toutes les occasions.</p>
                            <p class="text-yellow-500 font-bold text-xl mb-4">1499.99 MAD</p>
                            <div class="flex justify-between items-center">
                                <a href="details.php?product=2" class="text-yellow-500 hover:text-yellow-600 font-medium text-sm">Voir détails</a>
                                <button class="px-4 py-2 bg-yellow-500 text-white text-sm font-medium rounded-md shadow-md hover:bg-yellow-600 transition duration-300">
                                    Ajouter au panier
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Produit 3 -->
                    <div class="bg-white shadow-md rounded-md overflow-hidden">
                        <img src="../public/assets/images/produit3.jpg" alt="Produit 3" class="w-full h-48 object-cover">
                        <div class="p-4">
                            <h3 class="text-lg font-semibold text-gray-800 mb-2">Boucles d'Oreilles</h3>
                            <p class="text-gray-600 mb-4">Des boucles d'oreilles raffinées pour un look parfait.</p>
                            <p class="text-yellow-500 font-bold text-xl mb-4">790.99 MAD</p>
                            <div class="flex justify-between items-center">
                                <a href="details.php?product=3" class="text-yellow-500 hover:text-yellow-600 font-medium text-sm">Voir détails</a>
                                <button class="px-4 py-2 bg-yellow-500 text-white text-sm font-medium rounded-md shadow-md hover:bg-yellow-600 transition duration-300">
                                    Ajouter au panier
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Produit 4 -->
                    <div class="bg-white shadow-md rounded-md overflow-hidden">
                        <img src="../public/assets/images/produit4.jpg" alt="Produit 4" class="w-full h-48 object-cover">
                        <div class="p-4">
                            <h3 class="text-lg font-semibold text-gray-800 mb-2">Bracelet de Luxe</h3>
                            <p class="text-gray-600 mb-4">Un bracelet chic pour sublimer votre style.</p>
                            <p class="text-yellow-500 font-bold text-xl mb-4">590.99 MAD</p>
                            <div class="flex justify-between items-center">
                                <a href="details.php?product=4" class="text-yellow-500 hover:text-yellow-600 font-medium text-sm">Voir détails</a>
                                <button class="px-4 py-2 bg-yellow-500 text-white text-sm font-medium rounded-md shadow-md hover:bg-yellow-600 transition duration-300">
                                    Ajouter au panier
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Section Avis des utilisateurs -->
        <section class="py-10 lg:bg-white rounded-md md:bg-gray-50">
            <div class="container mx-auto">
                <h2 class="text-3xl font-bold text-gray-800 text-center mb-8">Avis de nos utilisateurs</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Avis 1 -->
                    <div class="bg-gray-50 shadow-md rounded-md p-6">
                        <div class="flex items-center mb-4">
                            <img src="https://ui-avatars.com/api/?name=Alice+Dupont&background=random&size=128" alt="Utilisateur 1" class="w-12 h-12 rounded-full mr-4">
                            <div>
                                <h3 class="text-lg font-semibold text-gray-800">Errami Aymane</h3>
                                <p class="text-sm text-gray-600">Client régulier</p>
                            </div>
                        </div>
                        <p class="text-gray-600">
                            "J'adore leurs bijoux, la qualité est exceptionnelle et les designs sont uniques. Je recommande vivement Bijuvia !"
                        </p>
                        <div class="mt-4 text-yellow-500">
                            ★★★★★
                        </div>
                    </div>

                    <!-- Avis 2 -->
                    <div class="bg-gray-50 shadow-md rounded-md p-6">
                        <div class="flex items-center mb-4">
                            <img src="https://ui-avatars.com/api/?name=Jean+Martin&background=random&size=128" alt="Utilisateur 2" class="w-12 h-12 rounded-full mr-4">
                            <div>
                                <h3 class="text-lg font-semibold text-gray-800">Aznidi Salah</h3>
                                <p class="text-sm text-gray-600">Client satisfait</p>
                            </div>
                        </div>
                        <p class="text-gray-600">
                            "Le service client est excellent, et la livraison a été très rapide. Les montres sont élégantes et parfaites pour offrir."
                        </p>
                        <div class="mt-4 text-yellow-500">
                            ★★★★★
                        </div>
                    </div>

                    <!-- Avis 3 -->
                    <div class="bg-gray-50 shadow-md rounded-md p-6">
                        <div class="flex items-center mb-4">
                            <img src="https://ui-avatars.com/api/?name=Emma+Durand&background=random&size=128" alt="Utilisateur 3" class="w-12 h-12 rounded-full mr-4">
                            <div>
                                <h3 class="text-lg font-semibold text-gray-800">Tazi Imad</h3>
                                <p class="text-sm text-gray-600">Client fidèle</p>
                            </div>
                        </div>
                        <p class="text-gray-600">
                            "Des produits incroyables avec un excellent rapport qualité-prix. J'ai déjà recommandé Bijuvia à mes amis !"
                        </p>
                        <div class="mt-4 text-yellow-500">
                            ★★★★★
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Section Laisser un avis -->
        <section class="py-10 bg-gray-50 rounded-md">
            <div class="container mx-auto">
                <h2 class="text-3xl font-bold text-gray-800 text-center mb-8">Laissez votre avis</h2>
                <div class="max-w-2xl mx-auto bg-white shadow-md rounded-md p-6">
                    <form id="reviewForm">
                        <!-- Nom -->
                        <div class="mb-4">
                            <label for="name" class="block text-gray-700 font-medium mb-2">Votre nom</label>
                            <input
                                type="text"
                                id="name"
                                name="name"
                                class="w-full border border-gray-300 rounded-md p-3
                                focus:outline-none focus:ring-2 focus:ring-yellow-500"
                                placeholder="Entrez votre nom"
                                
                            />
                            <span class="text-red-500 text-sm hidden" id="nameError">Veuillez entrer votre nom.</span>
                        </div>

                        <!-- Note -->
                        <div class="mb-4">
                            <label for="rating" class="block text-gray-700 font-medium mb-2">Votre note</label>
                            <div class="flex items-center flex-wrap space-x-2">
                                <div>
                                    <input type="radio" id="star1" name="rating" value="1" />
                                    <label for="star1" class="text-yellow-500 cursor-pointer">★</label>
                                </div>
                                <div>
                                    <input type="radio" id="star2" name="rating" value="2" />
                                    <label for="star2" class="text-yellow-500 cursor-pointer">★★</label>
                                </div>
                                <div>
                                    <input type="radio" id="star3" name="rating" value="3" />
                                    <label for="star3" class="text-yellow-500 cursor-pointer">★★★</label>
                                </div>
                                <div>
                                    <input type="radio" id="star4" name="rating" value="4" />
                                    <label for="star4" class="text-yellow-500 cursor-pointer">★★★★</label>
                                </div>
                                <div>
                                    <input type="radio" id="star5" name="rating" value="5" />
                                    <label for="star5" class="text-yellow-500 cursor-pointer">★★★★★</label>
                                </div>
                            </div>
                            <span class="text-red-500 text-sm hidden" id="ratingError">Veuillez sélectionner une note.</span>
                        </div>

                        <!-- Commentaire -->
                        <div class="mb-4">
                            <label for="comment" class="block text-gray-700 font-medium mb-2">Votre avis</label>
                            <textarea
                                id="comment"
                                name="comment"
                                rows="4"
                                class="w-full border border-gray-300 rounded-md p-3 focus:outline-none focus:ring-2 focus:ring-yellow-500"
                                placeholder="Écrivez votre commentaire ici..."
                                
                            ></textarea>
                            <span class="text-red-500 text-sm hidden" id="commentError">Veuillez écrire un commentaire.</span>
                        </div>

                        <!-- Bouton de soumission -->
                        <div class="text-center">
                            <button
                                type="submit"
                                class="px-6 py-3 bg-yellow-500 text-white font-medium text-lg rounded-md shadow-md hover:bg-yellow-600 focus:ring-2 focus:ring-yellow-500 transition duration-300 ease-in-out"
                            >
                                Soumettre
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </section>


        <section id="about" class="py-16 bg-white">
            <div class="container mx-auto px-6 lg:px-16">
                <div class="flex flex-col lg:flex-row items-center">
                    <!-- Image -->
                    <div class="w-86 lg:w-1/2 mb-8 lg:mb-0">
                        <img 
                            src="../public/assets/images/about.jpg" 
                            alt="Bijuvia À propos" 
                            class="rounded-md shadow-lg w-full"
                        >
                    </div>
                    <!-- Texte -->
                    <div class="w-full lg:w-1/2 lg:pl-12">
                        <h2 class="text-3xl font-bold text-gray-800 mb-6">À propos de Bijuvia</h2>
                        <p class="text-gray-600 text-lg leading-relaxed mb-4">
                            Bienvenue chez Bijuvia, votre destination incontournable pour des bijoux et des montres élégants et intemporels. Nous combinons style, qualité et passion pour offrir des créations uniques qui subliment votre personnalité.
                        </p>
                        <p class="text-gray-600 text-lg leading-relaxed mb-6">
                            Que vous cherchiez un cadeau spécial ou une pièce qui vous ressemble, nos collections s'adressent à tous les goûts et occasions. Bijuvia, c'est plus qu'une boutique, c'est une histoire de raffinement.
                        </p>
                        <a 
                            href="#tendances" 
                            class="inline-block px-6 py-3 bg-yellow-500 text-white font-medium text-lg rounded-md shadow-md hover:bg-yellow-600 transition duration-300 ease-in-out"
                        >
                            Explorer nos collections
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>


    <?php
        include __DIR__ . '/../includes/footer.php';
    ?>


</body>
</html>
<script>
    const form = document.getElementById("reviewForm");

    form.addEventListener("submit", function (e) {
        e.preventDefault();

        // Sélection des éléments
        const name = document.getElementById("name");
        const rating = document.querySelector('input[name="rating"]:checked');
        const comment = document.getElementById("comment");

        const nameError = document.getElementById("nameError");
        const ratingError = document.getElementById("ratingError");
        const commentError = document.getElementById("commentError");

        let isValid = true;

        // Validation du nom
        if (!name.value.trim()) {
            nameError.classList.remove("hidden");
            isValid = false;
        } else {
            nameError.classList.add("hidden");
        }

        // Validation de la note
        if (!rating) {
            ratingError.classList.remove("hidden");
            isValid = false;
        } else {
            ratingError.classList.add("hidden");
        }

        // Validation du commentaire
        if (!comment.value.trim()) {
            commentError.classList.remove("hidden");
            isValid = false;
        } else {
            commentError.classList.add("hidden");
        }

        // Si tout est valide, soumettez le formulaire
        if (isValid) {
            form.submit();
        }
    });
</script>
