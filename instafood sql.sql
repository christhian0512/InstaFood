--
-- PostgreSQL database dump
--

SET statement_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SET check_function_bodies = false;
SET client_min_messages = warning;

--
-- Name: plpgsql; Type: EXTENSION; Schema: -; Owner: 
--

CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;


--
-- Name: EXTENSION plpgsql; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';


SET search_path = public, pg_catalog;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- Name: empresas; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE empresas (
    nombre character varying(30) NOT NULL,
    direccion character varying(30) NOT NULL,
    "id_Empresa" character varying(20) NOT NULL,
    telefono character varying(20) NOT NULL,
    url character varying(40) NOT NULL,
    logo bytea NOT NULL
);


ALTER TABLE public.empresas OWNER TO postgres;

--
-- Name: usuarios; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE usuarios (
    "id_Usuario" character varying(30) NOT NULL,
    "id_Empresa" character varying(30) NOT NULL,
    rol character varying(20) NOT NULL,
    contrasena character varying(40) NOT NULL,
    nombre character varying(40) NOT NULL,
    cargo character varying(20) NOT NULL
);


ALTER TABLE public.usuarios OWNER TO postgres;

--
-- Name: empresas_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY empresas
    ADD CONSTRAINT empresas_pkey PRIMARY KEY ("id_Empresa");


--
-- Name: usuarios_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY usuarios
    ADD CONSTRAINT usuarios_pkey PRIMARY KEY ("id_Usuario");


--
-- Name: usuarios_id_Empresa_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY usuarios
    ADD CONSTRAINT "usuarios_id_Empresa_fkey" FOREIGN KEY ("id_Empresa") REFERENCES empresas("id_Empresa");


--
-- Name: public; Type: ACL; Schema: -; Owner: postgres
--

REVOKE ALL ON SCHEMA public FROM PUBLIC;
REVOKE ALL ON SCHEMA public FROM postgres;
GRANT ALL ON SCHEMA public TO postgres;
GRANT ALL ON SCHEMA public TO PUBLIC;


--
-- PostgreSQL database dump complete
--

