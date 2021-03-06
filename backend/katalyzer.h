/* Copyright (c) 2006 Roman Benkovic
 * edited by Tomas Kovacik (2008)
 * benkovic_roman@post.sk *
 * tokosk16@yahoo.com*/

#ifndef KATALYZER_H
#define KATALYZER_H

#include <stdlib.h>
#include <stdio.h>
#include <string.h>
#include <getopt.h>
#include <time.h>
#include <netdb.h>
#include <errno.h>
#include <sys/types.h>
#include <fcntl.h>
#include <unistd.h>
#include <signal.h>
#include <errno.h>
#include "mysql/mysql.h"
#include <netinet/in.h>
#include <net/ethernet.h>
#include <netinet/ether.h>
#include <netinet/ip6.h>
#include <pthread.h>

#include "variables.h"
#include "sip.h"

#ifdef _CAPTURE
#include "socket/ksocket.h"
#endif

#define LINE_LEN 24
#define HTML_PERIOD 5

void eth2_frame ( const u_char *pkt_data,int type );
void arp_protokol ( const u_char *pkt_data );
void ip_protokol ( const u_char *pkt_data, int len );
void ipv6_protokol ( const u_char *pkt_data, int len );
void tcp_protokol ( const u_char *pkt_data,int len );
//void icmp_protokol(const u_char *pkt_data,int h_len);
void udp_protokol ( const u_char *pkt_data,int len );
void net_protokol ( int number, char *protokols );
void trans_protokol ( int number, char *protokols );
#ifdef _CAPTURE
void dispatcher_handler ( const struct k_header *header, const u_char *pkt_data );
#else
void dispatcher_handler ( u_char *dump, const struct pcap_pkthdr *header, const u_char *pkt_data );
#endif
void ieee802 ( const u_char *pkt_data,int type );
void help();
void m_protokoly ( ZACIATOK_P *p_zac, char *s );
void free_protokoly ( ZACIATOK_P *p_zac );
void *zapis_do_DB_protokoly ( void *pretah2 );
char compare_IPv6 ( unsigned int *IP1, unsigned int *IP2 ); //porovname 2 IP adresy v6
/*
 * Funkcia sa pouziva na vytvorenie novych odkazov na vlakna
 * a vyhodenie zbytocnych odkazov zo struktury
 */
KTHREAD *create_thread ( KTHREAD **thread );

#endif
