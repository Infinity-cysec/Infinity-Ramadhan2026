#include <stdio.h>
#include <stdlib.h>
#include <string.h>

char y[] = "CNCC123";     
char fake[] = "table.txt";

const char *spitoon_banner =
"█████████████████████████████████████████████████████\n"
"███  🩸🏴☠️  THE SALTY SPITOON — NO COWARDS  🩸🏴☠️ ███\n"
"█████████████████████████████████████████████████████\n"
"   The tavern where sailors boast, brawl, and break egos.\n"
"   Only the merciless survive the night.\n"
"\n"
"                       ⚓      _.--.\n"
"                        \\    /.-.  \\\n"
"                   .--.  |   \\'.-'   |\n"
"                 .' .-.\\ |    '..'   /   BOUNCER PIRATE:\n"
"               _/_.-'  \\ \\      `---'    \"Ye think yer tough?\n"
"              /.'       | |_             Prove it.\"\n"
"\n"
"═══════════════════════════════════════════════════════\n"
"RULES OF THE SPITOON:\n"
"  Only the toughest get in.\n"
"  You must prove your toughness.\n"
"  Fail = Go to Weenie Hut Jr.’s.\n"
"\n"
"  Answer correctly — or return to mother's arms, son.\n"
"═══════════════════════════════════════════════════════\n";

unsigned int init() {
  setvbuf(stdin, 0, 2, 0);
  setvbuf(stdout, 0, 2, 0);
  setvbuf(stderr, 0, 2, 0);
  return 0;
}
void banner() {
    puts(spitoon_banner);
}

long long Shallty_Spitoon()
{
  char s[56]; // [rsp+0h] [rbp-40h] BYREF
  FILE *stream; // [rsp+38h] [rbp-8h]

  if ( !strncmp("CNCC", y, 4uLL) )
  {
    stream = fopen(fake, "r");
    if ( !stream )
    {
      puts("Minta Admin SONO!");
      exit(1);
    }
    fgets(s, 50, stream);
    puts("🏴 Arrr — Seems like you're tough enough!");
    puts("Congratulation! You earned a table inside The Salty Spitoon.");
    printf("reward : %s", s);
    fclose(stream);
  }
}

int main(int argc, const char **argv, const char **envp)
{
  init();
  char s[176]; // [rsp+20h] [rbp-C0h] BYREF
  char s2[16]; // [rsp+D0h] [rbp-10h] BYREF

  banner();

  printf("What's Your Name Punk: ");
  fgets(s, 168, stdin);
  printf("What makes YOU tough enough to enter Salty Spitoon? : ");
  fgets(s2, 16, stdin);
  s[strcspn(s, "\n")] = 0;
  s2[strcspn(s2, "\n")] = 0;
  if ( !strncmp("thekingwhowaitsuentnderthesevenseasbeatingfancyberandthekingoffallkingintheworld", s2, 6uLL) )
  {
    puts("noice ");
    if (strstr(s, "%") != NULL) Shallty_Spitoon();

  }
    else
  {
    puts("GET OUT, YOU LOSER!!!");
  }
    return 0;
}
