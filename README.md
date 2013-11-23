converts-number-Japanese
========================

Given the Japanese numeral reading system, write a program that converts an integer into the equivalent Japanese reading.

Basic numeral readings:
1: ichi
2: ni
3: san
4: yon
5: go
6: roku
7: nana
8: hachi
9: kyuu
10: juu
20: ni-juu
30: san-juu
100: hyaku
1000	: sen
10,000: man
100,000,000: oku
1,000,000,000,000: chou
10,000,000,000,000,000: kei

Exceptions due to voice rounding in Japanese reading:
300: sanbyaku
600: roppyaku
800: happyaku
3000: sanzen
8000: hassen
1,000,000,000,000: itchou
8,000,000,000,000: hatchou
10,000,000,000,000: jutchou (also applies to multiplies of 10,000,000,000,000)
10,000,000,000,000,000: ikkei
60,000,000,000,000,000: rokkei
80,000,000,000,000,000: hakkei
100,000,000,000,000,000: jukkei (also applies to multiplies of 10,000,000,000,000,000)
1,000,000,000,000,000,000: hyakkei (also applies to multiplies of 1,000,000,000,000,000,000)

Starting at 10,000, numbers begin with ichi if no digit would otherwise precede, e.g. 1,000 is sen but 10,000 is ichi-man.

Examples:
11: juu ichi
17: juu nana
151: hyaku go-juu ichi
302: san-byaku ni
469: yon-hyaku roku-juu kyuu
2025	: ni-sen ni-juu go
10,403: ichi-man yon-byaku san
41,892: yon-juu ichi-man happyaku kyuu-juu ni
80,000,000,000,000: hachi-jutchou
