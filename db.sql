DROP DATABASE appointment_system;
CREATE DATABASE appointment_system;

USE appointment_system;

CREATE TABLE user (
        id bigint unsigned PRIMARY KEY AUTO_INCREMENT,
        email varchar(64) UNIQUE NOT NULL,
        password varchar(64) NOT NULL
);

CREATE TABLE admin (
        id bigint unsigned PRIMARY KEY AUTO_INCREMENT,
        email varchar(64) UNIQUE NOT NULL,
        password varchar(64) NOT NULL
);

insert into user (id, email, password) values (1, 'fperrinchief0@wunderground.com', '$2a$04$YIUMoldFEpFv/zkD6DBwXu4nPoTC.ny9wVdWFC/uJ0tZldMpfgAD6');
insert into user (id, email, password) values (2, 'jhowlett1@feedburner.com', '$2a$04$h7Yas6ncZsoZl9SY6XnXCubAAMkeXPwWwBd6Q3T5JMYHjxk9xMfxe');
insert into user (id, email, password) values (3, 'dhannaway2@shop-pro.jp', '$2a$04$Jf6zpFvxmY4P2cJgsEkRHe54GK9MBUTC0xkFcuwnxZnbFY/FsP0/S');
insert into user (id, email, password) values (4, 'amchan3@vkontakte.ru', '$2a$04$qDSho9s3GSzrKiuMNZV1FeuwovvT47vCzjbnkoi6axwC16wwe8MDO');
insert into user (id, email, password) values (5, 'apauleau4@barnesandnoble.com', '$2a$04$Apiz.C/u7jUlq.GHClkwNepltXHV5/nCOYlZ6Axxi9L/Sl7mY0aE.');
insert into user (id, email, password) values (6, 'myegorev5@behance.net', '$2a$04$1UNZYAxeUPJDFDLkAQhDSejE2InknbQFG.T9sEHuzBAtYRizGOPyu');
insert into user (id, email, password) values (7, 'edurman6@livejournal.com', '$2a$04$NLBX1VpTuJJwYkP50DdR6eR/yZkwQQTd8vm8rGOcxJReA1qM1fACW');
insert into user (id, email, password) values (8, 'srymer7@toplist.cz', '$2a$04$4bqhihrGQ34woUATFRytTe.yrUvqRLHpo5rrz55bXEIi9dQ8/kRim');
insert into user (id, email, password) values (9, 'ekuhnhardt8@mapy.cz', '$2a$04$6OsHmbcDUGoN4OYamqP2vuU.yOfnlMvgWbN3/HpSgEcoPNiPOVjhi');
insert into user (id, email, password) values (10, 'dwinsome9@hao123.com', '$2a$04$ARn4eY3vo6J19/cLP7tC0uPpSLyGlQd3k/KI6KXJ9uiEwtElj2EVy');
insert into user (id, email, password) values (11, 'sclutterhama@w3.org', '$2a$04$WnJKEb4zJQ8/SzE3viNOxeYEVhwC0/uan5/kUm0P.bOC/mBEPKUue');
insert into user (id, email, password) values (12, 'awilliamb@ameblo.jp', '$2a$04$RyoeubWg77Yn1E13ERBXj.bQgDZedyBoXlzAopyRj7ivMUuwYa9Qi');
insert into user (id, email, password) values (13, 'cspreagc@nih.gov', '$2a$04$poUN50QdT.s9EdSIQ.v7KuhxjviUKDgCpVXm/ymDXPG2RyUATxlBC');
insert into user (id, email, password) values (14, 'lzanardiid@cbsnews.com', '$2a$04$839aGZuG6aeH/cWkFuV6peVYGXCIIcvd/iIu1ExP67uMeOEGC0tHC');
insert into user (id, email, password) values (15, 'fguesse@wsj.com', '$2a$04$d85zLe70l.5dmcE56s8nfu69gWopONiHc/E/XcNRCpXpIqWba6nWy');
insert into user (id, email, password) values (16, 'vkieff@com.com', '$2a$04$0HCEpZvUwOT8ZqhZ/f4ojuriwelJnUS2FmFdebjc1tcKJ96NHwR..');
insert into user (id, email, password) values (17, 'bcosbyg@instagram.com', '$2a$04$5ywROjO5conwmGAVcFg5rOEb7OEhjqUVH73s/cGuh65CNCTwAb9iq');
insert into user (id, email, password) values (18, 'pdebischofh@blog.com', '$2a$04$WpA7NSkINhkRgAd4r3WrE.aBxLEeL34JiBAyLxzfsFcxWHtjBYwcO');
insert into user (id, email, password) values (19, 'osedgmani@blog.com', '$2a$04$9RuVi2XZRTWiqT0ljj/Z1OjV6P0i0YLIAJjDlNhsuQkTildTyFShu');
insert into user (id, email, password) values (20, 'fsclaterj@cargocollective.com', '$2a$04$LA4ZsMl8IeFT19GYaHt0.uuPf7XNZPEmVxmM03N6Pykd3HIQ.eWde');
insert into user (id, email, password) values (21, 'wsnellek@cornell.edu', '$2a$04$9Fwr5OS3dLaWC590TsCogukzDaTJ/jrCNbtq5LmtWkhy8QZkyZaNu');
insert into user (id, email, password) values (22, 'clatchfordl@quantcast.com', '$2a$04$tYqypIhgp3Z8p5NBOiy47uMJwuD9FTbEgTe4ewVgNd15NsK4o1kLW');
insert into user (id, email, password) values (23, 'whudlestonm@creativecommons.org', '$2a$04$0NdELqUEkHkLhVlA6SDjWeL/bTgJaHGber2DOwq6fEiXQdGw/5L4G');
insert into user (id, email, password) values (24, 'alinesn@yale.edu', '$2a$04$o2yQikEGQ5lY7wSC6NJuQ.iMz6AnhLhvdJtwOujBC6VmTZJrPcuiS');
insert into user (id, email, password) values (25, 'vdymento@wikia.com', '$2a$04$q9MdGLcA2WV10b712cITeOpjsHuSn0VaIAUPu56EXPmhL7AaL/T4G');
insert into user (id, email, password) values (26, 'gohenecanp@youtu.be', '$2a$04$x8F5HLrNXlfvdIDqpj48k.XU6cp9bppy.GWan.u8gBpxmHitxQZHm');
insert into user (id, email, password) values (27, 'disaqq@csmonitor.com', '$2a$04$T9FhXzwhsIp.X7upvZW6aOeM5F/wV6anFsMFt8Y4IJYAhy0DbQayS');
insert into user (id, email, password) values (28, 'ccoenr@pcworld.com', '$2a$04$Usnx3EEO6coeGBeaOG96JeHaAPrLiEAmvmBeuO.QSNHWuikPMMsnC');
insert into user (id, email, password) values (29, 'knunesnabarros@hatena.ne.jp', '$2a$04$UIqCt8uNIDbdWuYA9C4ULeVE8hIMv8HdJ3LxXtSs4NPQStKd4jzfa');
insert into user (id, email, password) values (30, 'vdebellt@berkeley.edu', '$2a$04$yFmyWJnXUm053nNNKQgMdufwlF7R3yjWyZ1B2x7PoYjcMkB2EWQDi');
insert into user (id, email, password) values (31, 'tpetersonu@devhub.com', '$2a$04$mU61kms5AkQj6G9SNK6RvuE.eIDI2mKAuNiZvS5RAMQyM7CnCPERq');
insert into user (id, email, password) values (32, 'llearev@altervista.org', '$2a$04$i18s/Wpjg.p9u8wUlIPVxuYmeh9pLtbdyWhPZjZd.pZ165er0MqFO');
insert into user (id, email, password) values (33, 'ecarthyw@craigslist.org', '$2a$04$QksdmIo/lDDrOntA5t0BPORlNSeb62Q6pDAcqLNk9ffvNjpiL5rJG');
insert into user (id, email, password) values (34, 'gcreavinx@whitehouse.gov', '$2a$04$eZ2rA/PHXHB3b5CUlFb7teO5ouLdY4LXWGebNNjsjd8gexFtE3RCm');
insert into user (id, email, password) values (35, 'aindey@pen.io', '$2a$04$GkWkmU/iZBjh/CbnV7lDiOR9lwOH4gfCAsJcjkE7jCfFTquWCwUgi');
insert into user (id, email, password) values (36, 'ipaulinz@twitpic.com', '$2a$04$VYFZyLVZmbBWzG9CA3aStuh/vTXUv4XqDfn0isx2IBe7JbPvrhcia');
insert into user (id, email, password) values (37, 'lsclanders10@tamu.edu', '$2a$04$gPhl4q5CGcCscPyqa3KlWei9/oVDxrnNJSWctQbEEwdq2Q2Q1AVnC');
insert into user (id, email, password) values (38, 'kpriestley11@nifty.com', '$2a$04$D2XdNaCYhcrouBiuz7oWz.uBQbIQYEeSJW07so8yfi3lggo0vM0fC');
insert into user (id, email, password) values (39, 'jkellard12@ft.com', '$2a$04$2YELEJL7jv8z4Xr2qjGnjOnWGANPUYU3PVSr/MHr1WfBlSXxrfeJa');
insert into user (id, email, password) values (40, 'ceggleton13@miitbeian.gov.cn', '$2a$04$LcZWjMKcaNW8HIfJx81Z/.BwgdrFZ30uV7S9glyj.g8mBd4Ybc0jK');
insert into user (id, email, password) values (41, 'ebedin14@tiny.cc', '$2a$04$R/C0ISg8tY8MDzsn8MNkwufLI/gnsYHhNOSDqczPCUNNsWVrT9DMu');
insert into user (id, email, password) values (42, 'awale15@hatena.ne.jp', '$2a$04$AMP109IlWeD3r/M3Puny8O5u.Vgn.zd9qGBJ1Y7bimWckBuy6es6G');
insert into user (id, email, password) values (43, 'fswire16@vkontakte.ru', '$2a$04$KE8WrdX1gvLNs2gZ7ie8.O.QCaSW0PCMSA.lW/iVnKzoZDXxcUrK.');
insert into user (id, email, password) values (44, 'ncollop17@purevolume.com', '$2a$04$ZsfOGtLv/MDe7s7UhMrwtOgxd0M1vRqwJ1rY0RksX5MxqXR/0JjA2');
insert into user (id, email, password) values (45, 'lheijne18@hp.com', '$2a$04$u0B.kNfXGUfOhMQjHTfcSO7oAgjeyail8CwL0DqlSo75V103CkWSq');
insert into user (id, email, password) values (46, 'raltham19@symantec.com', '$2a$04$ff47.Fjl2QIgodJVExT2sOzBXl0.TV4SzizLR37H6V6.C1OFssxq2');
insert into user (id, email, password) values (47, 'bouldcott1a@biglobe.ne.jp', '$2a$04$45phZzYLSqACNllVYdD50eA3tUwGAvDdiSbi6l3pCBH3xS4.hmmu.');
insert into user (id, email, password) values (48, 'acuff1b@cnet.com', '$2a$04$GzOxo.BWrOUkHV5NviodbOzAMzUaJF.5CXLi7zOVEc8CnWJskCrhC');
insert into user (id, email, password) values (49, 'scortin1c@edublogs.org', '$2a$04$HDXrfPW9wJgAnT0YSD6SHe6YsVGsMpQC3NHCqSHyomU..CnHxPN3u');
insert into user (id, email, password) values (50, 'ufulle1d@apache.org', '$2a$04$1990iMkQO.zCewKR2.TSBOk4kgb7fCl5bhHp7UMbE19tjDJeoC1l2');
insert into user (id, email, password) values (51, 'rlionel1e@google.com.au', '$2a$04$VnYTnvw7TCYy9SEwNrrHtuKL4cBXva/Ms6KTwUaLnGQnvjDThjb2a');
insert into user (id, email, password) values (52, 'shandasyde1f@whitehouse.gov', '$2a$04$bm.HsnOmjoA7ykUYstED3eQSkQp1hT6SRIaUFTHUCoVOF3YTURLSa');
insert into user (id, email, password) values (53, 'mcarsey1g@mtv.com', '$2a$04$FnTsXqDYobCXv5sIccEmB.NBfF.D86ryS507vWyntUj6Az9P4ekva');
insert into user (id, email, password) values (54, 'jgabb1h@ehow.com', '$2a$04$kWUUcNY9z3Z3KMBXU5ECKuxu8M7ulvYrgb.dPoByymsIFvdrTOnwK');
insert into user (id, email, password) values (55, 'joxtoby1i@parallels.com', '$2a$04$U0rAINwJh2ODYlGebWkJiuM21CbvL.DZToAY4TobhS7gXzYozg6/S');
insert into user (id, email, password) values (56, 'ymangeon1j@google.ca', '$2a$04$G5ksqfg3AkNNiDh9rNPMGen9pYVXGyGDRNYcHgF4cR9zoa/Xb.u.u');
insert into user (id, email, password) values (57, 'awiffen1k@hubpages.com', '$2a$04$o3advV.DL9hs7kSFhP/EY.0DNZhXVOZbziiAY2EBgqsdMR2q5unGa');
insert into user (id, email, password) values (58, 'bredgewell1l@usatoday.com', '$2a$04$hqk4XDJfcp3PBdLokYy74ulJUiOHMVq9JZqZ9jRXspEbsfRBWeVxC');
insert into user (id, email, password) values (59, 'abeeke1m@yahoo.co.jp', '$2a$04$HqcAVLEOvgeZ0gpCWtOC7.NnWNkZFBRck9iETqMYfugWhK1UPn/ze');
insert into user (id, email, password) values (60, 'fharlock1n@pbs.org', '$2a$04$qid27O6tCBRkmfL4wJaw2eBILkJnV5.kKQAA7N4Kv920iCoYHifua');
insert into user (id, email, password) values (61, 'megar1o@squarespace.com', '$2a$04$yExoe1B8lCWb4LIYz/eh5.vEB3NuPY/uHxdugfs3XzkZZQZeBMV2C');
insert into user (id, email, password) values (62, 'cgowman1p@reddit.com', '$2a$04$eQvZCFfcemLH8NnxnCteq.4lVER21fB00gkuuF6jbYC/c9t2uB42.');
insert into user (id, email, password) values (63, 'glabatie1q@liveinternet.ru', '$2a$04$CFMR4ETbQ43oQgEQfH.OYOaYEr72BMEZ.sSpR275mU8egBkKLt1K6');
insert into user (id, email, password) values (64, 'lrosenstock1r@bloglines.com', '$2a$04$X4wd4L8oV.Y9DsZ7jKCDP.5YzFANkhLLlDag0.JbpwLAF0MWcFwmC');
insert into user (id, email, password) values (65, 'jaisman1s@prweb.com', '$2a$04$81FPDgHTxVcNgnGuc/2h/uvdF54BF9atNUpxLnH9DwOhtniCn/sce');
insert into user (id, email, password) values (66, 'qlantuff1t@drupal.org', '$2a$04$93P5xxEXFX9JoeB6ylO.f.Pw/mL8UP.lF53aMB0RS.qZfCXhjCd5q');
insert into user (id, email, password) values (67, 'nhovenden1u@newsvine.com', '$2a$04$Dg4kSqs.SR8zpq9gSR.CXekkyxBOTSFl414M5S5Zpxn7vZ6qs99qS');
insert into user (id, email, password) values (68, 'njoiner1v@ning.com', '$2a$04$gmkPkwXnvr/qPqKvVOJ.duwTCD.Uz8tKjjgJIS6NuLyA0HxxEfUl2');
insert into user (id, email, password) values (69, 'hkillingbeck1w@mapquest.com', '$2a$04$AXw0fiEPtIBibfD1YIygOuUEbQcC7zR1uJZGyORESOrPluR3py0tS');
insert into user (id, email, password) values (70, 'ahurdwell1x@jiathis.com', '$2a$04$iHNIUqiub54PQAMNW.MoeuuezTmY6ChWo93l85gdl18Z8EhyCNa9G');
insert into user (id, email, password) values (71, 'fbeininck1y@pen.io', '$2a$04$kUV4uF8.pyfKAqD5YcYj5eKAGabla/aWJHl.a4HYa4RaAYDfX6Plq');
insert into user (id, email, password) values (72, 'ggetten1z@dailymotion.com', '$2a$04$cT4G9KDLhcYYbCdhcWuDN.12byoz6Z4sQsag/pKM9Mid9CNzAIty.');
insert into user (id, email, password) values (73, 'acardall20@scribd.com', '$2a$04$agqT3hi4na.xG5ucytOp3u40KMSRL1vk3Ka4HuFmPeK5c6o1afbZm');
insert into user (id, email, password) values (74, 'mkennally21@last.fm', '$2a$04$vMuphlp6IqlaH2MxGLQu9.lLsLhdN7iUlApJJA2BMLe8nGd47fVzG');
insert into user (id, email, password) values (75, 'mcarlo22@mysql.com', '$2a$04$cw1bm86Ag5/75lDE9PfrHuE3Cl1Q9xU2lrIQy5iyAOT9Xcc5gW5CW');
insert into user (id, email, password) values (76, 'nreynard23@blinklist.com', '$2a$04$pppjW93LfY1U37u2n.zIZ.q.Jgqrp9.BR60e6cMqPO1DcpdzzciiK');
insert into user (id, email, password) values (77, 'hheinrich24@sbwire.com', '$2a$04$IHkrSJpTTCJqWrKk3nBgHuGiFm7tuSjBOq3.8AhTRCmDfu45s97Hy');
insert into user (id, email, password) values (78, 'jetchells25@wix.com', '$2a$04$d3yYjwgJlaaTpyaYbZG49O8I882L4hNbGZADL2ZCAVajs83FRic5K');
insert into user (id, email, password) values (79, 'mmccowen26@themeforest.net', '$2a$04$rt9TaF6cHOyTS/piRyel.OAUh6.9O.zFXEaVc4Uo6J6UYKi1jGjgm');
insert into user (id, email, password) values (80, 'bfessler27@omniture.com', '$2a$04$7h08ES.JSbY92l5TudN7pO3W.oKZ9p67dxBJL1FiP7e6HEUxag97O');
insert into user (id, email, password) values (81, 'shardman28@sbwire.com', '$2a$04$vDvIeFvkfeSYmUG7.UCiSuW6NlPCYy51MviIVtiTIoM9EI3.z5KVa');
insert into user (id, email, password) values (82, 'vcomley29@vistaprint.com', '$2a$04$/G23r6SJtLZ.ht3MMS8jT.Z5nXrtwA4IWyPNJlkDtRXn92uO.TV8W');
insert into user (id, email, password) values (83, 'tbutrimovich2a@ameblo.jp', '$2a$04$il4eWXTz8KdiBE3ZPVLZpOkv7J4o0wlFmBu7tuOT37pmQVM5w.4oq');
insert into user (id, email, password) values (84, 'yraittie2b@cisco.com', '$2a$04$0TrPptpRe8ZH515JLeSHi.sWUBDZuWehadRXazjbgGEIMOj/ji6mS');
insert into user (id, email, password) values (85, 'vdudley2c@simplemachines.org', '$2a$04$GSR/4L/4Vgu7pko6urQCA./KYz7tIP6cdAovs.NdvpASvwwF/nOne');
insert into user (id, email, password) values (86, 'dspinelli2d@berkeley.edu', '$2a$04$paPPDqSBwslojpRMPRZnbehiljidnA0ZmZ3S.Xv3nGwjNnbTf8fhy');
insert into user (id, email, password) values (87, 'rdavis2e@eventbrite.com', '$2a$04$iVrsTUrHPlQzsFcqupxWc.HvxZeobnxDb.QqDotq84UxyO/j0QqM.');
insert into user (id, email, password) values (88, 'gmassimo2f@nih.gov', '$2a$04$IKPzgTALq1aJ8gkfz7ccT.601EpFQvjrQbqQrcouKAYdfhFHOX4Ve');
insert into user (id, email, password) values (89, 'skingman2g@pen.io', '$2a$04$4EvREuJmZMOIMmCf6iGngOBFn.Xcmr6dGJ5uWy3LM/PRirIeW7q3m');
insert into user (id, email, password) values (90, 'fdumsday2h@paginegialle.it', '$2a$04$odUO7KRrgNw63SPqWdT2nueM4UxDmVaiAUBR2jA0raGFYvUvmkmbK');
insert into user (id, email, password) values (91, 'lnapton2i@apple.com', '$2a$04$sEgtuesP7IqR07HC.H2a6OAoqbsMMOhYJaUHn9rZFvtFHs7idrpOO');
insert into user (id, email, password) values (92, 'jdragon2j@skyrock.com', '$2a$04$IrNsci/twOo5yFoIHP1QOeSBSi7hTqH6ORB9sycLiql.kwIKrKvba');
insert into user (id, email, password) values (93, 'bhelliker2k@about.me', '$2a$04$6R1U6M9kWvqiddLoY.9M7OtgBq9vaEwEdHrBZ7SXVO6G8vio.BATW');
insert into user (id, email, password) values (94, 'bdenney2l@slate.com', '$2a$04$bEYqIpMd5mCpd5ZO2DWI1evGG8VJLoewqvXuMIkUBllyOvxpzxtQW');
insert into user (id, email, password) values (95, 'apeterken2m@pinterest.com', '$2a$04$tmZ672VzlOXikg4heFqImO2md.57icbr2wdHZBneiC3gAplsLOtXi');
insert into user (id, email, password) values (96, 'bdukesbury2n@printfriendly.com', '$2a$04$S/uKYBaL55cPBY1qVzrd5.Ft3JgHLf0neriBRCMfvzpdc/ISx3YSC');
insert into user (id, email, password) values (97, 'kfancutt2o@engadget.com', '$2a$04$dfqzEQrKom26crlbfRUGweWlRLX9GFXeS83WOfGYjoEgUarldvhji');
insert into user (id, email, password) values (98, 'efrigout2p@ft.com', '$2a$04$GOmw7HQfVD834Ng/y/Q3z.cU/YjKTvP0a7SiIRgOxxloj0cssjtae');
insert into user (id, email, password) values (99, 'kbarca2q@nature.com', '$2a$04$WsSHXRcBffUUcQRjARv1x.9b/k8qNZUpz6NaN5nTSQ0.MWV5LFW3u');
insert into user (id, email, password) values (100, 'agaitung2r@prnewswire.com', '$2a$04$onkO55HAjJPagAQYacSENuDmqIGX9QwULHnOhbMYqlpVSf5c21VW2');
