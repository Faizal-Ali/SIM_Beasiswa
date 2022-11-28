--------------------------------------------------------
--  File created - Sunday-November-27-2022   
--------------------------------------------------------
--------------------------------------------------------
--  DDL for Table TB_ADMIN
--------------------------------------------------------

  CREATE TABLE "C##BEASISWA"."TB_ADMIN" 
   (	"ID" NUMBER(12,0) GENERATED ALWAYS AS IDENTITY MINVALUE 1 MAXVALUE 9999999999999999999999999999 INCREMENT BY 1 START WITH 1 CACHE 20 NOORDER  NOCYCLE  NOKEEP  NOSCALE , 
	"NAMA" VARCHAR2(255 BYTE), 
	"USERNAME" VARCHAR2(255 BYTE), 
	"PASSWORD" VARCHAR2(20 BYTE)
   ) SEGMENT CREATION IMMEDIATE 
  PCTFREE 10 PCTUSED 40 INITRANS 1 MAXTRANS 255 
 NOCOMPRESS LOGGING
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1
  BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "USERS" ;
--------------------------------------------------------
--  DDL for Table TB_BEASISWA
--------------------------------------------------------

  CREATE TABLE "C##BEASISWA"."TB_BEASISWA" 
   (	"ID" NUMBER(12,0) GENERATED ALWAYS AS IDENTITY MINVALUE 1 MAXVALUE 9999999999999999999999999999 INCREMENT BY 1 START WITH 1 CACHE 20 NOORDER  NOCYCLE  NOKEEP  NOSCALE , 
	"JUDUL" VARCHAR2(255 BYTE), 
	"SYARAT" VARCHAR2(255 BYTE)
   ) SEGMENT CREATION IMMEDIATE 
  PCTFREE 10 PCTUSED 40 INITRANS 1 MAXTRANS 255 
 NOCOMPRESS LOGGING
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1
  BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "USERS" ;
--------------------------------------------------------
--  DDL for Table TB_MAHASISWA
--------------------------------------------------------

  CREATE TABLE "C##BEASISWA"."TB_MAHASISWA" 
   (	"ID" NUMBER(12,0) GENERATED ALWAYS AS IDENTITY MINVALUE 1 MAXVALUE 9999999999999999999999999999 INCREMENT BY 1 START WITH 1 CACHE 20 NOORDER  NOCYCLE  NOKEEP  NOSCALE , 
	"USERNAME" VARCHAR2(20 BYTE), 
	"PASSWORD" VARCHAR2(20 BYTE), 
	"NAMA" VARCHAR2(20 BYTE), 
	"NRP" VARCHAR2(20 BYTE), 
	"PRODI" VARCHAR2(20 BYTE), 
	"SEMESTER" VARCHAR2(20 BYTE), 
	"IPK" NUMBER(3,2), 
	"PENDAPATAN" NUMBER(20,0)
   ) SEGMENT CREATION IMMEDIATE 
  PCTFREE 10 PCTUSED 40 INITRANS 1 MAXTRANS 255 
 NOCOMPRESS LOGGING
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1
  BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "USERS" ;
--------------------------------------------------------
--  DDL for Table TB_MAHASISWA_BC
--------------------------------------------------------

  CREATE TABLE "C##BEASISWA"."TB_MAHASISWA_BC" 
   (	"ID" NUMBER(12,0), 
	"USERNAME" VARCHAR2(20 BYTE), 
	"PASSWORD" VARCHAR2(20 BYTE), 
	"NAMA" VARCHAR2(20 BYTE), 
	"NRP" VARCHAR2(20 BYTE), 
	"PRODI" VARCHAR2(20 BYTE), 
	"SEMESTER" VARCHAR2(20 BYTE), 
	"IPK" NUMBER(3,2), 
	"PENDAPATAN" NUMBER(20,0)
   ) SEGMENT CREATION IMMEDIATE 
  PCTFREE 10 PCTUSED 40 INITRANS 1 MAXTRANS 255 
 NOCOMPRESS LOGGING
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1
  BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "USERS" ;
--------------------------------------------------------
--  DDL for Table TB_PENGAJUAN_BEASISWA
--------------------------------------------------------

  CREATE TABLE "C##BEASISWA"."TB_PENGAJUAN_BEASISWA" 
   (	"ID" NUMBER(13,0) GENERATED ALWAYS AS IDENTITY MINVALUE 1 MAXVALUE 9999999999999999999999999999 INCREMENT BY 1 START WITH 1 CACHE 20 NOORDER  NOCYCLE  NOKEEP  NOSCALE , 
	"ID_BEASISWA" VARCHAR2(20 BYTE), 
	"ID_MAHASISWA" VARCHAR2(20 BYTE)
   ) SEGMENT CREATION IMMEDIATE 
  PCTFREE 10 PCTUSED 40 INITRANS 1 MAXTRANS 255 
 NOCOMPRESS LOGGING
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1
  BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "USERS" ;
--------------------------------------------------------
--  DDL for Index TB_ADMIN_PK
--------------------------------------------------------

  CREATE UNIQUE INDEX "C##BEASISWA"."TB_ADMIN_PK" ON "C##BEASISWA"."TB_ADMIN" ("ID") 
  PCTFREE 10 INITRANS 2 MAXTRANS 255 
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1
  BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "USERS" ;
--------------------------------------------------------
--  DDL for Index TB_BEASISWA_PK
--------------------------------------------------------

  CREATE UNIQUE INDEX "C##BEASISWA"."TB_BEASISWA_PK" ON "C##BEASISWA"."TB_BEASISWA" ("ID") 
  PCTFREE 10 INITRANS 2 MAXTRANS 255 
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1
  BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "USERS" ;
--------------------------------------------------------
--  DDL for Index TB_MAHASISWA_PK
--------------------------------------------------------

  CREATE UNIQUE INDEX "C##BEASISWA"."TB_MAHASISWA_PK" ON "C##BEASISWA"."TB_MAHASISWA" ("ID") 
  PCTFREE 10 INITRANS 2 MAXTRANS 255 
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1
  BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "USERS" ;
--------------------------------------------------------
--  DDL for Index TABLE1_PK
--------------------------------------------------------

  CREATE UNIQUE INDEX "C##BEASISWA"."TABLE1_PK" ON "C##BEASISWA"."TB_PENGAJUAN_BEASISWA" ("ID") 
  PCTFREE 10 INITRANS 2 MAXTRANS 255 
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1
  BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "USERS" ;
--------------------------------------------------------
--  DDL for Trigger DELETE_MAHASISWA
--------------------------------------------------------

  CREATE OR REPLACE EDITIONABLE TRIGGER "C##BEASISWA"."DELETE_MAHASISWA" 
AFTER DELETE ON TB_MAHASISWA

FOR EACH ROW
BEGIN
    INSERT 
    INTO 
    TB_MAHASISWA_BC (ID,USERNAME,PASSWORD,NAMA,NRP,PRODI,SEMESTER,IPK,PENDAPATAN)
    VALUES (
        :old.ID,
        :old.USERNAME,
        :old.PASSWORD,
        :old.NAMA,
        :old.NRP,
        :old.PRODI,
        :old.SEMESTER,
        :old.IPK,
        :old.PENDAPATAN
        );
END;
/
ALTER TRIGGER "C##BEASISWA"."DELETE_MAHASISWA" ENABLE;
--------------------------------------------------------
--  Constraints for Table TB_ADMIN
--------------------------------------------------------

  ALTER TABLE "C##BEASISWA"."TB_ADMIN" MODIFY ("ID" NOT NULL ENABLE);
  ALTER TABLE "C##BEASISWA"."TB_ADMIN" MODIFY ("NAMA" NOT NULL ENABLE);
  ALTER TABLE "C##BEASISWA"."TB_ADMIN" MODIFY ("USERNAME" NOT NULL ENABLE);
  ALTER TABLE "C##BEASISWA"."TB_ADMIN" MODIFY ("PASSWORD" NOT NULL ENABLE);
  ALTER TABLE "C##BEASISWA"."TB_ADMIN" ADD CONSTRAINT "TB_ADMIN_PK" PRIMARY KEY ("ID")
  USING INDEX PCTFREE 10 INITRANS 2 MAXTRANS 255 
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1
  BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "USERS"  ENABLE;
--------------------------------------------------------
--  Constraints for Table TB_BEASISWA
--------------------------------------------------------

  ALTER TABLE "C##BEASISWA"."TB_BEASISWA" MODIFY ("ID" NOT NULL ENABLE);
  ALTER TABLE "C##BEASISWA"."TB_BEASISWA" MODIFY ("JUDUL" NOT NULL ENABLE);
  ALTER TABLE "C##BEASISWA"."TB_BEASISWA" MODIFY ("SYARAT" NOT NULL ENABLE);
  ALTER TABLE "C##BEASISWA"."TB_BEASISWA" ADD CONSTRAINT "TB_BEASISWA_PK" PRIMARY KEY ("ID")
  USING INDEX PCTFREE 10 INITRANS 2 MAXTRANS 255 
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1
  BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "USERS"  ENABLE;
--------------------------------------------------------
--  Constraints for Table TB_MAHASISWA
--------------------------------------------------------

  ALTER TABLE "C##BEASISWA"."TB_MAHASISWA" MODIFY ("ID" NOT NULL ENABLE);
  ALTER TABLE "C##BEASISWA"."TB_MAHASISWA" ADD CONSTRAINT "TB_MAHASISWA_PK" PRIMARY KEY ("ID")
  USING INDEX PCTFREE 10 INITRANS 2 MAXTRANS 255 
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1
  BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "USERS"  ENABLE;
--------------------------------------------------------
--  Constraints for Table TB_MAHASISWA_BC
--------------------------------------------------------

  ALTER TABLE "C##BEASISWA"."TB_MAHASISWA_BC" MODIFY ("ID" NOT NULL ENABLE);
--------------------------------------------------------
--  Constraints for Table TB_PENGAJUAN_BEASISWA
--------------------------------------------------------

  ALTER TABLE "C##BEASISWA"."TB_PENGAJUAN_BEASISWA" MODIFY ("ID" NOT NULL ENABLE);
  ALTER TABLE "C##BEASISWA"."TB_PENGAJUAN_BEASISWA" MODIFY ("ID_BEASISWA" NOT NULL ENABLE);
  ALTER TABLE "C##BEASISWA"."TB_PENGAJUAN_BEASISWA" MODIFY ("ID_MAHASISWA" NOT NULL ENABLE);
  ALTER TABLE "C##BEASISWA"."TB_PENGAJUAN_BEASISWA" ADD CONSTRAINT "TABLE1_PK" PRIMARY KEY ("ID")
  USING INDEX PCTFREE 10 INITRANS 2 MAXTRANS 255 
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1
  BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "USERS"  ENABLE;
