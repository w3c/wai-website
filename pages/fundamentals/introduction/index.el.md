---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after "#".
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:"
title: Εισαγωγή στην Προσβασιμότητα του Ιστού (Web Accessibility)
lang: el   # Change "en" to the translated-language shortcode
last_updated: 2024-03-07   # Keep the date of the English version
first_published: "February 2005"

translators:
- name: "Πάνος Κουτσοδημητρόπουλος"
  
translation:
  last_updated: 2025-04-16 # Put the date of this translation YYYY-MM-DD (with month in the middle)

github:
  label: wai-accessibility-intro

permalink: /fundamentals/accessibility-intro/el   # Add the language shortcode to the end, with no slash at the end. For example /path/to/file/fr
ref: /fundamentals/accessibility-intro/     # Do not change this
  
# In the footer below:
# Do not change the dates
# Translate the other words, including "Date:" and "Editor:"
# Translate the Working Group name. Leave the Working Group acronym in English.
footer: >
  <p><strong>Συντάκτης:</strong> <a href="https://www.w3.org/People/Shawn/" lang="en">Shawn Lawton Henry</a>.</p>
  <p>Αναπτύχθηκε από την Ομάδα Εργασίας Εκπαίδευσης και Ενημέρωσης (<a href="https://www.w3.org/WAI/EO/" lang="en">EOWG</a>).</p>
---


{::nomarkdown}
{% include box.html type="start" h="2" title="Περίληψη" class="full" %}
{:/}

Όταν οι ιστότοποι και τα διαδικτυακά εργαλεία είναι κατάλληλα σχεδιασμένα και κωδικοποιημένα, τα άτομα με αναπηρία μπορούν να τα χρησιμοποιούν. Ωστόσο, επί του παρόντος, πολλοί ιστότοποι και εργαλεία αναπτύσσονται με εμπόδια προσβασιμότητας που καθιστούν δύσκολη ή αδύνατη τη χρήση τους από ορισμένα άτομα.

Η προσβασιμότητα στον ιστό  (<span lang="en">web</span>) ωφελεί τα άτομα, τις επιχειρήσεις και την κοινωνία. Τα διεθνή πρότυπα ιστού καθορίζουν τι απαιτείται για την προσβασιμότητα.

{::nomarkdown}
{% include box.html type="end" %}
{:/}

{::options toc_levels="2" /}

{::nomarkdown}
{% include_cached toc.html type="start" title="Περιεχόμενα Σελίδας" class="full" %}
{:/}

-   TOC is created automatically.
{:toc}

<span class="box-h box-h-simple box-h-full">Σχετικός Πόρος</span><br>
{% include video-link.html title="Βίντεο Εισαγωγή στην προσβασιμότητα στον Παγκόσμιο Ιστό και τα πρότυπα του W3C <em>(4 λεπτά)</em>" href="https://www.w3.org/WAI/videos/standards-and-benefits/el" src="/content-images/intro-accessibility/video-still-accessibility-intro-16-9.jpg" %}

{::nomarkdown}
{% include_cached toc.html type="end" %}
{:/}

## Πλαίσιο Προσβασιμότητας {#context}

<blockquote class="pull">
  <p>Η δύναμη του Ιστού έγκειται στην καθολικότητά του.<br />
    Η πρόσβαση όλων, ανεξαρτήτως αναπηρίας, αποτελεί ουσιαστική πτυχή.</p>
  <footer><cite><span lang="en">Tim Berners-Lee</span>, Διευθυντής του <span lang="en">W3C</span> και εφευρέτης του Παγκόσμιου Ιστού</cite></footer>
</blockquote>

Ο Παγκόσμιος Ιστός είναι θεμελιωδώς σχεδιασμένος ώστε να λειτουργεί για όλους τους ανθρώπους, ανεξάρτητα από τον  εξοπλισμό (<span lang="en">hardware</span>), το λογισμικό, τη γλώσσα, την τοποθεσία ή την ικανότητά τους. Όταν ο Παγκόσμιος Ιστός ανταποκρίνεται σε αυτόν τον στόχο, είναι προσβάσιμος σε άτομα με ποικίλο φάσμα ακοής, κίνησης, όρασης και γνωστικών ικανοτήτων.

Έτσι, ο αντίκτυπος της αναπηρίας αλλάζει ριζικά στον Παγκόσμιο Ιστό, επειδή ο Παγκόσμιος Ιστός καταργεί τα εμπόδια στην επικοινωνία και την αλληλεπίδραση που πολλοί άνθρωποι αντιμετωπίζουν στον φυσικό κόσμο. Ωστόσο, όταν οι ιστότοποι, οι εφαρμογές, οι τεχνολογίες ή τα εργαλεία είναι κακοσχεδιασμένα, μπορούν να δημιουργήσουν εμπόδια που αποκλείουν τους ανθρώπους από τη χρήση του Παγκόσμιου Ιστού.

**Η προσβασιμότητα είναι απαραίτητη για τους προγραμματιστές και τους οργανισμούς που θέλουν να δημιουργήσουν ιστότοπους και διαδικτυακά εργαλεία υψηλής ποιότητας και να μην αποκλείουν τους ανθρώπους από τη χρήση των προϊόντων και των υπηρεσιών τους.**

## Τι είναι η Προσβασιμότητα στον Παγκόσμιο Ιστό {#what}

Προσβασιμότητα στον ιστό σημαίνει ότι οι ιστότοποι, τα εργαλεία και οι τεχνολογίες σχεδιάζονται και αναπτύσσονται έτσι ώστε να μπορούν να τα χρησιμοποιούν τα άτομα με αναπηρία. Πιο συγκεκριμένα, τα άτομα μπορούν:

-   να αντιλαμβάνονται, να κατανοούν, να πλοηγούνται και να αλληλεπιδρούν με τον Παγκόσμιο Ιστό
-   να συνεισφέρουν στον Παγκόσμιο Ιστό

Η προσβασιμότητα στον Παγκόσμιο Ιστό περιλαμβάνει όλες τις αναπηρίες που επηρεάζουν την πρόσβαση στον Παγκόσμιο Ιστό, συμπεριλαμβανομένων:

-   ακουστικές
-   γνωστικές
-   νευρολογικές
-   σωματικές
-   ομιλίας
-   οπτικές

Η προσβασιμότητα στον ιστό ωφελεί επίσης άτομα *χωρίς* αναπηρία, για παράδειγμα:

-   άτομα που χρησιμοποιούν κινητά τηλέφωνα, έξυπνα ρολόγια, έξυπνες τηλεοράσεις και άλλες συσκευές με μικρές οθόνες, διαφορετικούς τρόπους διαφορετικούς τρόπους εισαγωγής δεδομένων κ.λπ.
-   άτομα μεγαλύτερης ηλικίας με μεταβαλλόμενες ικανότητες λόγω γήρανσης
-   άτομα με "προσωρινές αναπηρίες", όπως ένα σπασμένο χέρι ή χαμένα γυαλιά
-   άτομα με "περιορισμούς λόγω κατάστασης", όπως σε έντονο ηλιακό φως ή σε περιβάλλον όπου δεν μπορούν να ακούσουν ήχο
-   άτομα που χρησιμοποιούν αργή σύνδεση στο Διαδίκτυο ή που έχουν περιορισμένο ή ακριβό εύρος ζώνης (<span lang="en">bandwidth</span>)

Για ένα βίντεο 7 λεπτών με παραδείγματα για το πώς η προσβασιμότητα είναι απαραίτητη για τα άτομα με αναπηρία και χρήσιμη για όλους σε διάφορες καταστάσεις, δείτε:<br>
{% include video-link.html title="Προοπτικές Προσβασιμότητας στον Ιστό <em lang='en'>(YouTube)</em>" href="https://www.youtube.com/watch?v=3f31oufqFSM" src="/content-images/intro-accessibility/video-still-accessibility-perspectives-16-9.jpg" %}

{::nomarkdown}
{% include box.html type="start" h="3" title="Περισσότερες Πληροφορίες σχετικά με το Τι είναι Προσβασιμότητα" class="simple aside" %}
{:/}

-   Όταν θέλετε να μάθετε περισσότερα για το πώς οι διάφορες αναπηρίες επηρεάζουν τη χρήση του Παγκόσμιου Ιστού και να διαβάσετε σενάρια για άτομα με αναπηρία που χρησιμοποιούν τον Παγκόσμιο Ιστό, ανατρέξτε στην ενότητα [[Πώς τα Άτομα με Αναπηρία Χρησιμοποιούν τον Παγκόσμιο Ιστό]](/people-use-web/).
-   Αν θέλετε περισσότερα παραδείγματα πλεονεκτημάτων για άλλους, δείτε τον πολυμεσικό πόρο [Χρήση από Άτομα Με και Χωρίς Αναπηρίες](/media/av/users-orgs/#situations), τον αρχειοθετημένο πόρο [Η προσβασιμότητα στον Παγκόσμιο Ιστό Ωφελεί Άτομα Με και Χωρίς Αναπηρίες](https://www.w3.org/WAI/business-case/archive/soc#groups) και τον αρχειοθετημένο πόρο για κινητά [[Κοινές εμπειρίες στον Παγκόσμιο Ιστό: Εμπόδια Κοινά για τους Χρήστες Κινητών Συσκευών και τα Άτομα με Αναπηρίες]](/standards-guidelines/shared-experiences/).

{::nomarkdown}
{% include box.html type="end" %}
{:/}

## Η Προσβασιμότητα είναι Σημαντική για τα Άτομα, τις Επιχειρήσεις, την Κοινωνία {#important}

Ο Παγκόσμιος Ιστός είναι ένας ολοένα και πιο σημαντικός πόρος σε πολλές πτυχές της ζωής: εκπαίδευση, απασχόληση, κυβέρνηση, εμπόριο, υγειονομική περίθαλψη, ψυχαγωγία και πολλά άλλα. Είναι σημαντικό ο Παγκόσμιος Ιστός να είναι προσβάσιμος, ώστε να παρέχει ίση πρόσβαση και ίσες ευκαιρίες σε άτομα με διαφορετικές ικανότητες. Η πρόσβαση στις τεχνολογίες πληροφοριών και επικοινωνιών, συμπεριλαμβανομένου του Παγκόσμιου Ιστού, ορίζεται ως βασικό ανθρώπινο δικαίωμα στη Σύμβαση των Ηνωμένων Εθνών για τα Δικαιώματα των Ατόμων με Αναπηρία (<span lang="en">UN</span> [<span lang="en">CRPD</span>](https://www.un.org/development/desa/disabilities/convention-on-the-rights-of-persons-with-disabilities.html)).

Ο Παγκόσμιος Ιστός προσφέρει τη δυνατότητα πρωτοφανούς πρόσβασης σε πληροφορίες και αλληλεπίδραση για πολλά άτομα με αναπηρία. Δηλαδή, τα εμπόδια προσβασιμότητας στα έντυπα, ακουστικά και οπτικά μέσα μπορούν να ξεπεραστούν πολύ πιο εύκολα μέσω των τεχνολογιών του Ιστού.

Η προσβασιμότητα υποστηρίζει την κοινωνική ένταξη για τα άτομα με αναπηρία, καθώς και για άλλα άτομα, όπως:

-   άτομα μεγαλύτερης ηλικίας
-   άτομα σε αγροτικές περιοχές
-   άτομα σε αναπτυσσόμενες χώρες

**Υπάρχει επίσης μια ισχυρή επιχειρηματική επιχειρηματολογία για την προσβασιμότητα.** Όπως φαίνεται στην προηγούμενη ενότητα, ο προσβάσιμος σχεδιασμός βελτιώνει τη συνολική εμπειρία και ικανοποίηση των χρηστών, ιδίως σε διάφορες καταστάσεις, σε διαφορετικές συσκευές και για τους χρήστες μεγαλύτερης ηλικίας. Η προσβασιμότητα μπορεί να ενισχύσει τη μάρκα σας, να προωθήσει την καινοτομία και να επεκτείνει την εμβέλειά σας στην αγορά.

Η προσβασιμότητα στον ιστό **απαιτείται από το νόμο** σε πολλές περιπτώσεις.

{::nomarkdown}
{% include box.html type="start" h="3" title="Περισσότερες Πληροφορίες γιατί η Προσβασιμότητα είναι Σημαντική" class="simple aside" %}
{:/}

-   Γενικές πληροφορίες σχετικά με τα επιχειρηματικά οφέλη υπάρχουν στο [[Η Επιχειρηματική Υπόθεση της Ψηφιακής Προσβασιμότητας]](/business-case/).
    -   Παραδείγματα των οφελών από [την προσβασιμότητα των μέσων ήχου και εικόνας](/media/av/) υπάρχουν στην ενότητα [Οφέλη για τους Οργανισμούς](/media/av/users-orgs/#benefits).
-   Οδηγίες για τον υπολογισμό των νομικών απαιτήσεων υπάρχουν στην αρχειοθετημένη ενότητα [Νομικοί και Πολιτικοί Παράγοντες](https://www.w3.org/WAI/business-case/archive/pol).

{::nomarkdown}
{% include box.html type="end" %}
{:/}

## Κάνοντας τον Παγκόσμιο Ιστό Προσβάσιμο {#making}

Η προσβασιμότητα στον ιστό εξαρτάται από τη συνεργασία διαφόρων στοιχείων, συμπεριλαμβανομένων των τεχνολογιών ιστού, των προγραμμάτων περιήγησης στον ιστό (<span lang="en">web browsers </span>) και άλλων \"<span lang="en">user agents</span>\", των εργαλείων σύνταξης και των ιστότοπων.

Το <span lang="en">W3C Web Accessibility Initiative ([WAI](/about/participating/))</span> αναπτύσσει τεχνικές προδιαγραφές, κατευθυντήριες γραμμές, τεχνικές και υποστηρικτικούς πόρους που περιγράφουν λύσεις προσβασιμότητας.Αυτά θεωρούνται διεθνή πρότυπα για την προσβασιμότητα στον ιστό- για παράδειγμα, το <abbr title="Web Content Accessibility Guidelines (WCAG)">WCAG</abbr> 2.0 είναι επίσης το <abbr title="International Organization for Standardization">ISO</abbr> πρότυπο: ISO/<abbr title="International Electrotechnical Commission">IEC</abbr> 40500.

{::nomarkdown}
{% include box.html type="start" h="3" title="Περισσότερες Πληροφορίες σχετικά με την Προσβασιμότητα στον Παγκόσμιο Ιστό" class="simple aside" %}
{:/}

-   Περισσότερες πληροφορίες σχετικά με τη συνεργασία αυτών των πτυχών της προσβασιμότητας υπάρχουν στο [[Βασικά συστατικά της προσβασιμότητας στον Παγκόσμιο Ιστό]](/fundamentals/components/).
-   Οι Οδηγίες Προσβασιμότητας Περιεχομένου Ιστού (WCAG), οι Οδηγίες Προσβασιμότητας Εργαλείων Συγγραφής (ATAG), το ARIA για Προσβάσιμες Πλούσιες Εφαρμογές Διαδικτύου και άλλοι σημαντικοί πόροι παρουσιάζονται στο [[Επισκόπηση Προτύπων Προσβασιμότητας του W3C]](/standards-guidelines/).
-   Για να μάθετε περισσότερα σχετικά με το πώς το W3C WAI αναπτύσσει υλικό μέσω της διεθνούς συμμετοχής πολλών ενδιαφερομένων μερών και πώς μπορείτε να συνεισφέρετε, ανατρέξτε στις ενότητες [[Σχετικά με το WAI]](/about/) and [[Συμμετοχή στο WAI]](/about/participating/).

{::nomarkdown}
{% include box.html type="end" %}
{:/}

### Κάνοντας τον Ιστότοπό σας Προσβάσιμο {#website}

Πολλές πτυχές της προσβασιμότητας είναι αρκετά εύκολο να κατανοηθούν και να εφαρμοστούν. Ορισμένες λύσεις προσβασιμότητας είναι πιο σύνθετες και απαιτούν περισσότερες γνώσεις για την εφαρμογή τους.

Είναι πιο αποδοτικό και αποτελεσματικό να ενσωματώνετε την προσβασιμότητα από την αρχή των έργων, ώστε να μην χρειάζεται να επιστρέψετε και να ξανακάνετε εργασίες.

{::nomarkdown}
{% include box.html type="start" h="3" title="Περισσότερες Πληροφορίες σχετικά με την Προσβασιμότητα του Ιστοτόπου σας" class="simple aside" %}
{:/}

-    Για μια εισαγωγή στις απαιτήσεις προσβασιμότητας και τα διεθνή πρότυπα, ανατρέξτε στην ενότητα: [[Αρχές Προσβασιμότητας]](/fundamentals/accessibility-principles/).
-   Για να κατανοήσετε ορισμένα κοινά εμπόδια προσβασιμότητας από την οπτική γωνία του ελέγχου (<span lang="en">testing</span>), δείτε το: [[Εύκολοι Έλεγχοι - Μια Πρώτη Ανασκόπηση]](/test-evaluate/preliminary/).
-   Για ορισμένες βασικές εκτιμήσεις σχετικά με το σχεδιασμό, τη συγγραφή και την ανάπτυξη για προσβασιμότητα, δείτε το: [[Συμβουλές για να Ξεκινήσετε]](/tips/).
-   Όταν είστε έτοιμοι να μάθετε περισσότερα για την ανάπτυξη και το σχεδιασμό, πιθανόν να χρησιμοποιήσετε πόρους όπως:
    -   [Πώς να Ανταποκριθείτε στα WCAG (Γρήγορη Αναφορά)](https://www.w3.org/WAI/WCAG22/quickref/)
    -   [<span lang="en">Tutorials</span> για την προσβασιμότητα στον Παγκόσμιο Ιστό](/tutorials/)
-   Για θέματα διαχείρισης έργου και οργάνωσης, ανατρέξτε στην ενότητα [[Σχεδιασμός και Διαχείριση της Προσβασιμότητας στον Παγκόσμιο Ιστό]](/planning-and-managing/).<br>
    Εάν πρέπει να κάνετε γρήγορες διορθώσεις τώρα, δείτε το: [[Προσεγγίσεις για Προσωρινές Επισκευές]](/planning/interim-repairs/).

{::nomarkdown}
{% include box.html type="end" %}
{:/}

## Αξιολόγηση της Προσβασιμότητας {#evaluate}

Όταν αναπτύσσετε ή επανασχεδιάζετε έναν ιστότοπο, αξιολογήστε την προσβασιμότητα νωρίς και καθ' όλη τη διάρκεια της διαδικασίας ανάπτυξης, ώστε να εντοπίζετε τα προβλήματα προσβασιμότητας νωρίς, όταν είναι ευκολότερο να τα αντιμετωπίσετε. Απλά βήματα, όπως η αλλαγή των ρυθμίσεων σε ένα πρόγραμμα περιήγησης, μπορούν να σας βοηθήσουν να αξιολογήσετε ορισμένες πτυχές της προσβασιμότητας. Η ολοκληρωμένη αξιολόγηση για να διαπιστωθεί αν ένας δικτυακός τόπος πληροί όλες τις οδηγίες προσβασιμότητας απαιτεί μεγαλύτερη προσπάθεια.

Υπάρχουν εργαλεία αξιολόγησης που βοηθούν στην αξιολόγηση. Ωστόσο, κανένα εργαλείο από μόνο του δεν μπορεί να καθορίσει αν ένας ιστότοπος πληροί τις οδηγίες προσβασιμότητας. Για να προσδιοριστεί αν ένας δικτυακός τόπος είναι προσβάσιμος, απαιτείται ανθρώπινη αξιολόγηση με γνώση.


{::nomarkdown}
{% include box.html type="start" h="3" title="Περισσότερες Πληροφορίες σχετικά με την Αξιολόγηση της Προσβασιμότητας" class="simple aside" %}
{:/}

-   Οι πόροι που βοηθούν στην αξιολόγηση της προσβασιμότητας περιγράφονται στην ενότητα [[Αξιολόγηση ιστότοπων για προσβασιμότητα]](/test-evaluate/).

{::nomarkdown}
{% include box.html type="end" %}
{:/}

{% include excol.html type="start" id="examples" %}

## Παραδείγματα

{% include excol.html type="middle" %}

### Εναλλακτικό Κείμενο για Εικόνες

![image of logo; HTML markup img alt='Web Accessibility Initiative logo'](https://www.w3.org/WAI/intro/alt-logo.png){:.right}

Οι εικόνες θα πρέπει να περιλαμβάνουν *[ισοδύναμο εναλλακτικό κείμενο](https://www.w3.org/WAI/WCAG22/Understanding/text-alternatives)* (<span lang="en">alt text</span>) στο <span lang="en">markup</span>/κώδικα.

Εάν δεν παρέχεται εναλλακτικό κείμενο για τις εικόνες, οι πληροφορίες της εικόνας δεν είναι προσβάσιμες, για παράδειγμα, σε άτομα που δεν μπορούν να δουν και χρησιμοποιούν πρόγραμμα ανάγνωσης οθόνης που διαβάζει δυνατά τις πληροφορίες σε μια σελίδα, συμπεριλαμβανομένου του εναλλακτικού κειμένου για την οπτική εικόνα.

Όταν παρέχεται ισοδύναμο εναλλακτικό κείμενο, οι πληροφορίες είναι διαθέσιμες σε άτομα που είναι τυφλά, καθώς και σε άτομα που απενεργοποιούν τις εικόνες (για παράδειγμα, σε περιοχές με ακριβό ή χαμηλό εύρος ζώνης). Είναι επίσης διαθέσιμες σε τεχνολογίες που δεν μπορούν να δουν εικόνες, όπως οι μηχανές αναζήτησης.

### Εισαγωγή Δεδομένων μέσω Πληκτρολογίου

![mouse crossed out](https://www.w3.org/WAI/intro/no-mouse.png){:.left width="67" height="45"}

Μερικοί άνθρωποι δεν μπορούν να χρησιμοποιήσουν το ποντίκι (<span lang="en">mouse</span>), συμπεριλαμβανομένων πολλών ηλικιωμένων χρηστών με περιορισμένο έλεγχο της κινητικότητας. Ένας προσβάσιμος δικτυακός τόπος δεν βασίζεται στο ποντίκι- καθιστά [όλες τις λειτουργίες διαθέσιμες από το πληκτρολόγιο](https://www.w3.org/WAI/WCAG22/Understanding/keyboard-accessible).  Έτσι, τα άτομα με αναπηρία μπορούν να χρησιμοποιούν [υποστηρικτικές τεχνολογίες](/planning/involving-users/#at) που μιμούνται το πληκτρολόγιο, όπως η εισαγωγή ομιλίας.

### Απομαγνητοφωνήσεις για τον Ήχο

[![example transcript](https://www.w3.org/WAI/intro/transcript.png){:.right width="251" height="254"}](https://www.w3.org/WAI/highlights/200606wcag2interview.html)

Όπως οι εικόνες δεν είναι διαθέσιμες σε ανθρώπους που δεν μπορούν να δουν, έτσι και τα αρχεία ήχου δεν είναι διαθέσιμα σε ανθρώπους που δεν μπορούν να ακούσουν. Η παροχή απομαγνητοφωνημένου κειμένου καθιστά τις ηχητικές πληροφορίες προσβάσιμες σε άτομα με κώφωση ή βαρηκοΐα, καθώς και σε μηχανές αναζήτησης και άλλες τεχνολογίες που δεν μπορούν να ακούσουν.

Είναι εύκολο και σχετικά φθηνό για τους ιστότοπους να παρέχουν απομαγνητοφωνήσεις. Υπάρχουν επίσης υπηρεσίες απομαγνητοφώνησης που δημιουργούν μεταγραφές κειμένου σε μορφή <span lang="en">HTML</span>.

{::nomarkdown}
{% include box.html type="start" h="3" title="Περισσότερα Παραδείγματα" class="simple aside" %}
{:/} 

-   [[Συμβουλές για να Ξεκινήσετε]](/tips/)
-   [[Εύκολοι Έλεγχοι - Μια Πρώτη Ανασκόπηση]](/test-evaluate/preliminary/)
-   {% include video-link.html class="small inline" title="Προοπτικές Προσβασιμότητας στον Παγκόσμιο Ιστό &mdash; βίντεο και περιγραφές" href="/perspective-videos/" src="/content-images/intro-accessibility/video-still-accessibility-perspectives-16-9.jpg" %}

{::nomarkdown}
{% include box.html type="end" %}
{:/}

{% include excol.html type="end" %}

## Για Περισσότερες Πληροφορίες {#more-info}

Το <span lang="en">WAI</span> του <span lang="en">W3C</span> παρέχει ένα ευρύ φάσμα πόρων σχετικά με διάφορες πτυχές των [προτύπων](/standards-guidelines/)  προσβασιμότητας στον ιστό, την [εκπαίδευση](/teach-advocate/), τον [έλεγχο/αξιολόγηση](/test-evaluate/), τη [διαχείριση έργων και την πολιτική](/planning/). Σας ενθαρρύνουμε να εξερευνήσετε αυτόν τον ιστότοπο ή να δείτε τον [κατάλογο πόρων του WAI](/resources/) list.

**[[Θεμέλια Ψηφιακής Προσβασιμότητας - Δωρεάν διαδικτυακό μάθημα]](/courses/foundations-course/)** παρέχει τα θεμέλια που χρειάζεστε για να καταστήσετε την ψηφιακή σας τεχνολογία προσβάσιμη.
