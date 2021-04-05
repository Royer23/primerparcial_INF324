select 
sigla,
sum(case when depto='01' then prom else 0 end) CH,
sum(case when depto='02' then prom else 0 end) LP,
sum(case when depto='03' then prom else 0 end) CB,
sum(case when depto='04' then prom else 0 end) 'OR',
sum(case when depto='05' then prom else 0 end) PT,
sum(case when depto='06' then prom else 0 end) TJ,
sum(case when depto='07' then prom else 0 end) SC,
sum(case when depto='08' then prom else 0 end) BE,
sum(case when depto='09' then prom else 0 end) PA
from (SELECT sigla,depto, avg(prom) as prom
		from persona,(SELECT sigla,ci,notafinal as prom FROM nota) tmp
		where persona.ci=tmp.ci
		group by depto , sigla
		) tmp
group by sigla