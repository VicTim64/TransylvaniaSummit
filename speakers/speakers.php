<?php
function addBreakAfterFirstWord($string) {
    // Split the string into an array of words
    if ( $string == 'Azamfirei' ) {
        return 'Prof. Univ. Dr. <br />Leonard Azamfirei';
    }
    $words = explode(' ', $string);

    // Take the first word
    $firstWord = array_shift($words);

    // Join the remaining words with a space
    $remainingWords = implode(' ', $words);

    // Combine the first word and the remaining words with a line break
    $result = $firstWord . "<br>" . $remainingWords;

    // Return the result wrapped in HTML
    return $result;
}

$speakers = array(
    
    array(
        'name'                  => 'Péter Ferenc',
        'title'                 => 'President of the Mureș County Council',    
        'description'           => 'Ferenc Péter is a Romanian politician of Hungarian ethnicity, mayor of the city of Sovata between 2000-2016, and since 2016 he has held the position of president of the Mureș County Council.',
        'image'                 => 'Péter_Ferenc.jpg'
    ),
    array(
        'name'                  => 'Soos Zoltan',
        'title'                 => 'Mayor of Târgu Mureș',    
        'description'           => 'A Romanian historian, archaeologist, and politician of Hungarian ethnicity, elected mayor of the city of Târgu Mureș in the September 2020 elections.',
        'image'                 => 'Soos_Zoltan.jpg'
    ),
    
    array(
        'name'                  => 'Sebastian Burduja',
        'title'                 => 'Minister of Energy of Romania',    
        'description'           => 'Public servant, development advisor, and entrepreneur with significant experience across the private, public, and nonprofit sectors. Specialties: general management, international development, regional and urban development, finance, EU funds, infrastructure projects, democracy studies, anti-corruption policies, telecommunications, political campaigns, communications.',
        'image'                 => 'Sebastian_Burduja.jpeg'
    ),
    array(
        'name'                  => 'Professor Akhtar Badshah',
        'title'                 => 'Distinguished Practitioner at University of Washington',    
        'description'           => 'Focused on exploring the changing social impact space and its impact on the nonprofit and social development space. He also looks at the intersection of technology, especially exponential technologies and its impact on societies and how nonprofits can effectively utilize these technologies. ',
        'image'                 => 'Professor_Akhtar_Badshah.jpg'
    ),
    array(
        'name'                  => 'Paul Woods-Turley',
        'title'                 => 'Sports Director & Executive Producer',    
        'description'           => 'Sports Director & Executive Producer for Live, Originals & Branded Content. Co-author of best selling book, ‘How to Thrive and Survive‘, an inspirational, aspirational and entrepreneurial guide to navigating professional and personal journeys in business and beyond. ',
        'image'                 => 'Paul_Woods-Turley.png'
    ),
    array(
        'name'                  => 'David Abel',
        'title'                 => 'Founder @The Digital Lightbulb',    
        'description'           => 'David Abel shines in marketing, brand experience, forging brand loyalty and being able to unlock rapid global growth numerous times. He has received the warmest approvals from those he has mentored and the brands he has supported. ',
        'image'                 => 'David_Abel.jpeg'
    ),
    array(
        'name'                  => 'Jost Fischer',
        'title'                 => 'Chairman and Board Member @Dental Innovations BVBA',    
        'description'           => 'Has served on the board of directors of AEON since February 2017 and serves on the board of directors as a representative of Dental Innovations BVBA. Mr. Fischer is the co-owner of Dental Innovations BVBA.',
        'image'                 => 'Jost_Fischer.jpg'
    ),
    array(
        'name'                  => 'Manuel Ruiz Alfaro',
        'title'                 => 'Creative director & founder @Asterizco',    
        'description'           => 'As a creative director and founder of Asterizco, a renowned branding agency established over 18 years ago, he has been providing comprehensive B2B and B2C marketing and branding services to companies seeking to expand their brand, products, and services within the Latin-American market and beyond.',
        'image'                 => 'Manuel_Ruiz_Alfaro.jpeg'
    ),
    array(
        'name'                  => 'Alena Yudina',
        'title'                 => 'Entrepreneur, EmTech Metaverse Strategy, Blockchain Expert',    
        'description'           => 'Alena Yudina is an EmTech enthusiast, founder of the EmTech Investment Meeting, passionate about intercultural collaboration, creative problem solving, business development and strategy, leader with management experience in profit and non-profit organizations.',
        'image'                 => 'Alena_Yudina.jpeg'
    ),
    
    array(
        'name'                  => 'Jonathan Crocker',
        'title'                 => 'Founder of Research Yoga <br />Health Optimisation Guru <br />Oceanographic Researcher',    
        'description'           => 'He has a strong background in the financial services industry. Jonathan Crocker most recently worked at AGF Investments as the Vice President of Institutional Business Development starting in October 2020.',
        'image'                 => 'crocker.jpeg'
    ),
    array(
        'name'                  => 'Alaa Khalifa',
        'title'                 => 'CEO @Digital Experts Marketing',    
        'description'           => 'Destination Marketing Director and Digital Transformation in Travel & CEO of Digital Digital Experts, which is a premium Digital Company specialized in Travel & Hospitality marketing and destination marketing to DMo\'s, Tour operators, OTA, and luxury Hotels.',
        'image'                 => 'Alaa_Khalifa.jpeg'
    ),
    array(
        'name'                  => 'Gabriele Pao-Pei Andreoli',
        'title'                 => 'President IASC - Founder of Evolutionary Biohacking',    
        'description'           => 'With over thirty years of experience in advancing technology, science, and education, Gabriele Pao-Pei Andreoli is  a multidisciplinary visionary and a passionate advocate for interdisciplinary regenerative therapy. Also a contributing writer at Monaco Voice, a board member at Regenesis distribution ltd, and an associate professor at "Anania Shirakatsi" University of International Relations.',
        'image'                 => 'Gabriele_Pao-Pei_Andreoli.jpeg'
    ),
    array(
        'name'                  => 'Adnan Al Noorani',
        'title'                 => 'The Founder of Future Innovation Summit, Chairman of the Board of D1 Technologies & LEO Investments',    
        'description'           => 'Mr. Adnan Al Noorani is a serial entrepreneur, philanthropist, and trusted advisor to royal families in the UAE. His name is synonymous with innovation, leadership, and community betterment. As the founder of the prestigious Future Innovation Summit and Chairman of the Board for Leo Investments, D1Technologies, Apollo Management, and H2H General Trading, he has not only navigated the intricate landscape of business but also redefined it.',
        'image'                 => 'Adnan_Al_Noorani.jpg'
    ),
    // array(
    //     'name'                  => 'Daniel Gould',
    //     'title'                 => 'Business Development / Venture Partner',    
    //     'description'           => 'Two decades in digital media and entertainment. Seed stage venture partner and Band of Angels member. 15 years of experience representing TV networks and Internet/wireless distributors (e.g. Fox, Univision, Viacom, Intel Media, Sony, Roku, Alexa and Verizon). 6 years of product management experience in streaming media and advertising, including the first personalized radio subscription service at MusicMatch, the first personalized e-mail marketing system at Amazon, and the initial Zune music store at MSN (Microsoft).',
    //     'image'                 => 'Daniel_Gould.jpeg'
    // ),
    array(
        'name'                  => 'Gayatree Dipchan',
        'title'                 => 'Psychologist and Behavior Consultant',    
        'description'           => 'Experienced Behavior Change Consultant with 20 years experience as a practicing psychologist and a demonstrated history of working in NGOs, International Organisations and Private Consultancy. ',
        'image'                 => 'gayatree_.jpeg'
    ),
    array(
        'name'                  => 'Queen Diambi',
        'title'                 => 'Queen of the Bakwa Luntu',    
        'description'           => 'Diambi Kabatusuila is the traditional Queen of the Bakwa Luntu people of the Kingdom of Luba, located in the southern part of the Democratic Republic of Congo. Queen Diambi is a philanthropist and a passionate environmental activist who is involved in numerous organizations. She founded The Elikia Hope Foundation, which provides water, medical resources, and education to more than 40,000 homeless children in Kinshasa.',
        'image'                 => 'Queen_Diambi.jpg'
    ),
    array(
        'name'                  => 'Maxcene Crowe',
        'title'                 => 'Facilities Management Procurement Specialist & Owner of CIWFM',    
        'description'           => 'As a Facilities Management Procurement Specialist with over 29 years of experience, Maxcene Crowe helps organisations create an impact through education, sharing knowledge, and implementing strategies and solutions for facilities management and procurement. She holds the Chartered Institute of Workplace and Facilities Management (CIWFM) credential and she is also the author of Mobilisation Mastery, a book that shares insights and best practices for mobilising supply chains and operational teams across EMEA.',
        'image'                 => 'Maxcene_Crowe.jpeg'
    ),
    
    array(
        'name'                  => 'LyNea "LB" Bell',
        'title'                 => 'CEO/ President Talent & Literary Agent',    
        'description'           => 'LyNea "LB" Bell represents top tier talent, actors, writers, producers, directors, musical artists, and comedians.',
        'image'                 => 'LyNea_LB_Bell.jpeg'
    ),
    array(
        'name'                  => 'Esen Girit Tümer',
        'title'                 => 'Founder CEO @Essential Evolutions & InfiniTech & @Artificial Intelligence & Tech Association',    
        'description'           => 'With over 25 years of executive and leadership experience in high-tech companies such as Microsoft, Johnson & Johnson, Tyco & Covidien, Girit Tümer has led numerous international projects all over the world. She has a strong background in Civil Society Organizations, representing Turkey in Brussels within the A.B/E.U regulations under COCIR. Recognized by Forbes and The Economist magazines, Girit Tümer has been ranked among the top 50 successful women leaders nationwide across all industries. ',
        'image'                 => 'Esen_Girit_Tümer.jpeg'
    ),
    array(
        'name'                  => 'Nasty Vladoiu',
        'title'                 => 'President of Romania\'s Union of Bilateral Chambers of Commerce',    
        'description'           => 'Mr. Nasty Vlădoiu is the current President of Romania\'s Union of Bilateral Chambers of Commerce. He is also the founder of the Economic & Commercial Diplomats Club, the chairman of the International Union of Bilateral Chambers of Commerce and Industry- Worldwide Headquarter, the President and Headmaster of the Institute of Foreign Commerce and Business Diplomacy, and the President of the Bilateral Chamber of Commerce Romania- Ukraine, having previously served as President of the Chamber of Commercial Diplomacy with China from 2008 to 2013.',
        'image'                 => 'vladoiu.jpeg'
    ),
    array(
        'name'                  => 'Marius Viorel Posa',
        'title'                 => 'State Undersecretary',    
        'description'           => 'Marius Viorel Posa is undersecretary of State in the Ministry of Research, Innovation and Digitization in Romania',
        'image'                 => 'Marius_Viorel_Posa.jpeg'
    ),
    array(
        'name'                  => 'Cosmin Pop',
        'title'                 => 'CEO ROMUR. SA.',
        'description'           => '',
        'image'                 => 'cosmin_pop.jpeg'
    ),
    array(
        'name'                  => 'Rodica Baciu',
        'title'                 => 'Owner @Materom',    
        'description'           => 'Rodica Baciu founded, in 1998, together with her husband, Matei Baciu, the well-known company Materom, one of the biggest players on the auto parts trade market in the country and in this region of Europe.',
        'image'                 => 'Rodica_Baciu.jpg'
    ),
    array(
        'name'                  => 'Dustin Plantholt',
        'title'                 => 'Entrepreneur and Media Professional',    
        'description'           => 'Dustin Plantholt is an entrepreneur and media professional whose early years in foster care shaped his path towards connecting with international leaders and influencers. In July 2023, Dustin Plantholt was honored with the esteemed title of Knight of the Order of Prince Danilo I of Montenegro. Subsequently, in October 2023, he received the distinguished title of Knight Commander of the Order of Merit of the Portuguese Royal House. These honors were in recognition of his unwavering commitment to impactful initiatives and societal advancement.',
        'image'                 => 'Dustin_Plantholt.jpeg'
    ),
    array(
        'name'                  => 'Claudia Miclaus',
        'title'                 => 'CEO  @Brand Capital Advisors',
        'description'           => 'Claudia Miclaus is an entrepreneur, strategic advisor, personal branding expert and educator specializing in influence, reputation and ethical leadership. She works with thought leaders representing the world’s most respected and well-known organizations, including Harvard, Nasdaq, Pfizer, World Economic Forum and YPO. She is the CEO of Brand Capital Advisors.',
        'image'                 => 'claudia.jpg'
    ),

    array(
        'name'                  => 'Azamfirei',
        'title'                 => 'The Rector of @UMFST "George Emil Palade" from Târgu Mureș',    
        'description'           => 'Since 2012 Leonard Azamfirei is the Rector of the University of Medicine, Pharmacy, Science and Technology of Târgu Mureș (UMFST)',
        'image'                 => 'Leonard_Azamfirei.png'
    ),
    // array(
    //     'name'                  => 'Ioan Rareș Bogdan',
    //     'title'                 => 'First Vice President PNL, Member of the European Parliament, Journalist.',
    //     'description'           => '',
    //     'image'                 => 'ioanraresbogdan.jpg'
    // ),

    array(
        'name'                  => 'Ilie Puscas',
        'title'                 => 'Country Manager @ Binance Romania',    
        'description'           => 'As the Country Manager for Romania at Binance, the world\'s largest cryptocurrency exchange by trading volume and users, Ilie Puscas is responsible for driving the company\'s growth and innovation in the Romanian market. He brings over 5 years of experience in the crypto and fintech industry, working with various cryptocurrency exchanges, start-ups, and advisory companies, such as Emirex, Emiswap, Kuende, Diaspora, Slavi, Koinly, and CryptoMeans.',
        'image'                 => 'Ilie_Puscas.jpeg'
    ),
    array(
        'name'                  => 'Cristina Chiriac',
        'title'                 => 'President at CONAF (National Confederation for Female Entrepreneurship)',    
        'description'           => 'Cristina Chiriac is a Romanian businesswoman, economist by profession, specialized in finance, banks, stock exchanges and insurance and a doctor in economics, appraiser, accountant, insolvency practitioner, mediator and international arbitrator in mediation.',
        'image'                 => 'Cristina_Chiriac.jpeg'
    ),
    array(
        'name'                  => 'Josh Zacharias',
        'title'                 => 'CEO @Azomureș',    
        'description'           => 'Currently the CEO of Azomureș, with experience in top management within the Ameropa Group, Josh Zacharias previously held the positions of Chief Risk Officer within Ameropa, Switzerland, or general manager and CFO of Impact Fertilisers in Australia, the company also , member of the group.',
        'image'                 => 'Josh_Zacharias.jpg'
    ),
    array(
        'name'                  => 'Andra Patricia Popovici',
        'title'                 => 'Marketing Manager @Hell Energy Romania',    
        'description'           => 'Experienced Sales And Marketing Specialist with a demonstrated history of working in the hospitality industry. Skilled in Creativity Skills, Organization Skills, Data Analysis, Strategic Planning, Design Skills (Photoshop), Social Media Advertising and Strategic Communications.',
        'image'                 => 'Andra_Patricia_Popovici.jpeg'
    ),
    array(
        'name'                  => 'Micsunica Pelaghie',
        'title'                 => 'Country Manager @Hell Energy Romania',    
        'description'           => 'Micșunica Pelaghie is the Country Manager of Hell Energy Romania, the market leader in energy drinks.',
        'image'                 => 'Micsunica_Pelaghie.jpeg'
    ),
    array(
        'name'                  => 'Michael Bolger',
        'title'                 => 'Managing Director at Beacon Capital',    
        'description'           => 'His focus is predominantly on the corporate finance needs of the Beacon Capital’s larger clients, acting almost like an in-house corporate finance adviser. Many of these clients had to reinvent themselves following the crash of a decade ago, recycling their seed capital and profits, and are finally seeing the fruits of their hard work.',
        'image'                 => 'Michael_Bolger.jpeg'
    ),
    array(
        'name'                  => 'Gerry Corrigan',
        'title'                 => 'Founder at Ilimex Limited',    
        'description'           => 'Gerry Corrigan is the CEO at Ilimex Limited, the world\'s first air sterilisation unit, that kills 99.9999% of pathogens on first pass. ',
        'image'                 => 'Gerry_Corrigan.jpeg'
    ),
    array(
        'name'                  => 'Doru Borșan',
        'title'                 => 'Founder @Transylvania Summit, CEO @Smart Cities Technologies SE',    
        'description'           => 'Doru Borșan is the founder of TransylvaniaSummit, founder of the RUA ecosystem - Romanians united at home (rua.ro), owner of the online newspaper msnews.ro, real estate developer and organizer of the Transylvania Summit event.',
        'image'                 => 'Doru_Borșan.jpg'
    ),
    array(
        'name'                  => 'Marius Iosif',
        'title'                 => 'CEO Tenuta Romana',
        'description'           => '',
        'image'                 => 'Marius_Iosif.jpeg'
    ),
    array(
        'name'                  => 'Iohana Borșan',
        'title'                 => 'Co Founder @Rua Ecosystem',
        'description'           => '',
        'image'                 => 'iohana_b.jpeg'
    ),
    // array(
    //     'name'                  => 'Andrea Somavilla',
    //     'title'                 => '',
    //     'description'           => '',
    //     'image'                 => 'Andrea_Somavilla.jpeg'
    // ),
    array(
        'name'                  => 'Paulo Sommavilla',
        'title'                 => 'Owner Sommavilla Construczioni',
        'description'           => '',
        'image'                 => 'Paulo_Somavilla.jpeg'
    ),
    
    array(
        'name'                  => 'Norbert Steff',
        'title'                 => 'CTO @Neotech',
        'description'           => '',
        'image'                 => 'norbert.webp'
    ),
    array(
        'name'                  => 'Tudor Comand',
        'title'                 => 'Chief of Strategy @Neotech',
        'description'           => '',
        'image'                 => 'tudor_coman.webp'
    ),
    array(
        'name'                  => 'Jon Dajci',
        'title'                 => 'CEO TMS Consultancy & Founder of Midnight Show',
        'description'           => 'With over a decade of entrepreneurial triumphs, Jon Dajci, also known as Midnightcrypto, is a luminary in the FinTech and cryptocurrency realms. His journey from spearheading ventures in the UK to fostering a sustainable blockchain ecosystem reflects a deep-seated commitment to innovation, security, and the democratization of digital finance. Jon’s foresight and leadership have been pivotal in navigating emerging trends, ensuring TMS Consultancy not only anticipates the future of technology but shapes it.',
        'image'                 => 'jon_tms.jpeg'
    ),
    array(
        'name'                  => 'Rene Lauk',
        'title'                 => 'Head of legal @Neotech',
        'description'           => 'Legal advisor on alternative fundraising structures and crypto financing',
        'image'                 => 'rene_lauk_.jpeg'
    ),
    array(
        'name'                  => 'H.E. Mark Lindsay',
        'title'                 => 'Director of the Health Care and Pharmaceuticals practice at The Livingston Group',
        'description'           => 'Mark Lindsay is the director of the health care and pharmaceutical practice area at The Livingston Group.  He employs his expertise in government relations and private sector management and communications to assist a wide variety of TLG clients. Mr. Lindsay also focuses on the following practice areas: education, international relations, entertainment, civil rights, non-profit and financial services and technology.  In addition, he has used his extensive Congressional and White House experience to assist his clients in securing innovative solutions to meet their national and local needs in the private and public sectors.  Mr. Lindsay’s advocacy is based on his wide range of relationships across the government and throughout the private marketplace. ',
        'image'                 => 'mark_.jpeg'
    ),
    array(
        'name'                  => 'Francisco Arias',
        'title'                 => 'CEO - OWNER MUTAL BANK COLUMBIA',
        'description'           => '',
        'image'                 => 'francisco_arias.jpeg'
    ),
    array(
        'name'                  => 'Henry Baron',
        'title'                 => 'CEO of Galaxy fc international , soccer business and international management.',
        'description'           => '',
        'image'                 => 'henry_baron.jpeg'
    ),
    array(
        'name'                  => 'Gullermo Rincon',
        'title'                 => 'CEO Inversiones Ricoradi S.A.S.',
        'description'           => '',
        'image'                 => 'Gullermo_.jpeg '
    ),
    array(
        'name'                  => 'Marek Bernát',
        'title'                 => 'Managing Director MyE s. r. o',
        'description'           => 'The world’s first solar compatible EV charger',
        'image'                 => 'marek.jpg'
    ),
    array(
        'name'                  => 'Ioana Rauca',
        'title'                 => 'Progect manager RUA app',
        'description'           => '',
        'image'                 => 'ioana_rauca.jpeg',
    ),
    array(
        'name'                  => 'Andron Flavia Calina',
        'title'                 => 'Product Owner RUA App',
        'description'           => '',
        'image'                 => 'flavia_2_.jpeg'
    ),
    
    array(
        'name'                  => 'Cezar Sigmirean',
        'title'                 => 'Vice-Dean of the Faculty of Science and Letters (UMFST), Brand Strategist',
        'description'           => '',
        'image'                 => 'cezar.jpg'
    ),
    // array(
    //     'name'                  => 'Lexie Kolossov',
    //     'title'                 => 'Fashion Model',    
    //     'description'           => 'Lexie is a fashion model who was born in Vienna in a Russian household. She went to the Vienna International School and studied in London International Business (Majoring in Marketing). Growing up she was a tomboy and everybody would always call her Löwenkopf because she was this rebellious curly hair kid always wandering off somewhere seeking adventures.',
    //     'image'                 => 'Lexie_Kolossov.jpg'
    // ),
    array(
        'name'                  => 'Carla Berbary',
        'title'                 => 'Speaker, Therapist & University Tutor',    
        'description'           => 'A distinguished therapist, speaker, and podcaster with over two decades of expertise in the clinical field. Throughout her career, she has dedicated herself to helping individuals in navigating trauma, grief, and loss, along with specializing in providing support to victims of Narcissistic Personality Disorder abuse.',
        'image'                 => 'Carla_Berbary.jpeg'
    ),
    array(
        'name'                  => 'Erika Carlota Berliner Espinosa de los Monteros',
        'title'                 => 'Communicator, actress, TV and radio presenter.',
        'description'           => 'Communicator, actress, TV and radio presenter. Committed to solidarity and humanitarian projects, especially with victims of human trafficking and wars.
        Entrepreneur, multifaceted businesswoman with important diplomatic, political and business relations in several Latin American countries. Representative of companies linked to the energy sector, water treatment, construction, carbon footprint ODS, among others. For the last 10 years I have been an investment advisor in Real Estate, especially in Spain. In the audiovisual sector I am executive producer and associate producer of several ongoing projects. I especially highlight my role as "Ambassador for Education" for Ecuador extending a cordial invitation to collaborate, to help me to train our young people as the best for tomorrow.',
        'image'                 => 'erika_karlota.jpeg'
    ),
    array(
        'name'                  => 'Irene Vantaraki',
        'title'                 => 'Founder and Managing Director of Avadar Transatlantic',
        'description'           => 'Irene Vantaraki is a Public and international affairs adviser and business relations strategist. Founder and Managing Director of Avadar Transatlantic based in Athens Greece , Irene has been collaborating with prominent individuals, corporations and international organisations across the US, Europe and the Middle East, delivering tangible results in the fields of reputation management, media affairs, civil society engagement, regional cooperation and investment development.',
        'image'                 => 'irene.jpeg'
    ),
    array(
        'name'                  => 'Kirill Vokhov',
        'title'                 => 'CEO, Entrepreneur, M&A Specialist',
        'description'           => 'Kirill Vekhov\'s journey, marked by his ascent from the icy winters of Moscow to the warm beaches of Hawaii, culminating in his recognition as a Monaco 40 under 40 laureate, is a story of exceptional entrepreneurial spirit and adaptability.',
        'image'                 => 'Kirill_22.jpeg'
    ),
    array(
        'name'                  => 'Kelly Max',
        'title'                 => 'Founder & CEO: Max & Arro + Modernist',
        'description'           => 'Kelly Max is a visionary blending creativity with logic to inspire unity and authenticity on a global scale. His leadership in his recent projects and ventures like Modernist, Mooon.Party, and OWOW® showcases his innovative approach to connect people worldwide utilizing creative, technology, and real life experiences. Kelly\'s prior collaborations with brands like Nike and Mercedes-Benz highlight his versatility and ability to impact diverse sectors. Fluent in English and German, he stands at the intersection of art, music, design, fashion, technology, and space, driving forward connections through genuine expression.',
        'image'                 => 'kelly_max.jpg'
    ),
    array(
        'name'                  => 'Abraham Charles',
        'title'                 => 'Founder and CEO of Eachandveryone',
        'description'           => 'Abraham Charles is the visionary Founder and CEO of eachandveryone, a pioneering digital and social media influencer company established in February 2020. 

        Abraham has distinguished his agency with a bespoke artificial intelligence and large language models that analyse historical social and business data to actively predict campaign ROI. 
        
        This innovative approach offers clients a unique guarantee—achieving the predicted ROI or providing a money-back offer.
        
        Under Abraham’s leadership, eachandeveryone has achieved remarkable growth milestones, including a 750% increase in sales through influencer engagement and a 2300% boost in social awareness. 
        
        The company works with a diverse range of clients from SMEs to global corporations within B2B2C, reshaping how brands connect with their audiences across different scales.
        
        An international speaker, Abraham shares his insights on leveraging digital platforms for brand growth, drawing from extensive experience collaborating with international clients and leading high-impact campaigns.',
        'image'                 => 'abraham.jpeg'
    ),
    array(
        'name'                  => 'Trevor Porter',
        'title'                 => 'Managing Director, One Golden Nugget',
        'description'           => 'Trevor Porter is an accomplished entrepreneur and business leader with over four decades of experience across various industries. With a proven track record of success, he has demonstrated exceptional leadership skills and a keen business acumen. From founding award-winning breweries to managing a thriving Media company, Trevor\'s diverse portfolio showcases his versatility and innovative spirit.',
        'image'                 => 'trevor_.jpeg'
    ),
    array(
        'name'                  => 'Anders Kristiansen',
        'title'                 => 'Ethereum Core developer at Nethermind',
        'description'           => 'Anders Kristiansen, an experienced Ethereum Core developer at Nethermind. With a passion for blockchain dating back to 2014, Anders brings a wealth of experience in software development and blockchain technology. His contributions to Ethereum\'s core development make him an invaluable asset to the crypto community.',
        'image'                 => 'anders.jpeg'
    )

); 
